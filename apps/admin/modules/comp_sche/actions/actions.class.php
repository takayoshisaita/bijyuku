<?php


/**
 * comp_sche actions.
 *
 * @package    iyasido
 * @subpackage comp_sche
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comp_scheActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $user = $this->getUser();

    if($user)
    {
      $shop = Doctrine::getTable('Shop')
        ->createQuery('s')
        ->where('s.username=?', $user->getUsername())
        ->execute();

      if($user->getUsername() != $shop[0]->getUserName())
      {
        $this->forward('error', 'error401');
      }
    }

    $companions = $shop[0]->getCompanions();
    $this->companions = $companions;

    $adjust = 0;
//  2012.06.09 出勤切り替え時刻を24:00に変更
//  if(strtotime(date("H:i")) <= strtotime("03:00"))
//  {
//    $adjust = 1;
//  }

    if ($request->getParameter('updatetimeup'))
    {
      foreach($companions as $c)
      {
        $q = Doctrine_Query :: create()
          ->select('s.*')
          ->from('Schedule s')
          ->innerJoin('s.Companion c')
          ->where('c.id=?', $c->getId())
          ->andWhere('s.date=?', date("Y-m-d 00:00:00", strtotime("-$adjust day")));

        $result = $q->fetchOne();

        if ($result['id'])
        {
          $c->setTimeup($result['intime']);
        }
        else
        {
          $c->setTimeup(null);
        }
        $c->save();
      }
    }
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CompScheForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest :: POST));

    $this->form = new CompScheForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $weeks = WeekTable :: getWeekArr();
    $this->Weeks = $weeks;

    $this->forward404Unless($companion = Doctrine :: getTable('Companion')->find(array (
      $request->getParameter('id')
    )), sprintf('Object companion does not exist (%s).', $request->getParameter('id')));
    $this->form = new CompScheForm($companion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest :: POST) || $request->isMethod(sfRequest :: PUT));
    $this->forward404Unless($companion = Doctrine :: getTable('Companion')->find(array (
      $request->getParameter('id')
    )), sprintf('Object companion does not exist (%s).', $request->getParameter('id')));
    $this->form = new CompScheForm($companion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($companion = Doctrine :: getTable('Companion')->find(array (
      $request->getParameter('id')
    )), sprintf('Object companion does not exist (%s).', $request->getParameter('id')));
    $companion->delete();

    $this->redirect('comp_sche/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $comp = $request->getParameter('companion');
    $companionWeeks = $comp['weeks_list'];
    $cs = $comp['schedules'];

    for ($i = 0; $i < 14; $i++)
    {
      // 現在の週の月曜から順に日付を取得
      $date = ScheduleTable :: getDayOfWeek($i);

      // 今週or次週のスケジュールへコピーするチェックボックスがONで
      // a)その日がﾚｷﾞｭﾗｰ出勤曜日の場合 => レギュラー入り・上がり時刻をコピー
      // b)その日がﾚｷﾞｭﾗｰ出勤曜日でない場合かつ入り・上がり時刻がnullでない場合  => 入り・上がり時刻にnullを設定
      if (($i < 7 && array_key_exists('copy_to_thisweek', $comp) && $comp['copy_to_thisweek']) || ($i >= 7 && array_key_exists('copy_to_nextweek', $comp) && $comp['copy_to_nextweek']))
      {
        if (in_array(($i % 7), $companionWeeks))
        {
          $cs[$i]['intime'] = $comp['intime'];
          $cs[$i]['outtime'] = $comp['outtime'];
        }
        else
        {

          if($cs[$i]['intime'] != null) $cs[$i]['intime'] = null;
          if($cs[$i]['outtime'] != null) $cs[$i]['outtime'] != null;
        }
      }
    }

    $comp['schedules'] = $cs;
    $request->setParameter('companion', $comp);

    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $companion = $form->save();

      $deleted = Doctrine_Query::create()
                  ->delete()
                  ->from('Schedule')
                  ->where('intime is NULL')
                  ->andWhere('outtime is NULL')
                  ->execute();

      if ($request->getParameter('saveandreturn'))
      {
        $this->redirect('comp_sche/index');
      }
      $this->redirect('comp_sche/edit?id=' . $companion->getId());
    }
  }
}