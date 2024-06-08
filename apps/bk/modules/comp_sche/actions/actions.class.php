<?php


/**
 * comp_sche actions.
 *
 * @package    bijyuku
   * @subpackage comp_sche
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comp_scheActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $Shop_id = 1;

    if($request->hasParameter('shop_id'))
    {
      $Shop_id = $request->getParameter('shop_id');
    }
    $this->getUser()->setAttribute('shop_id', $Shop_id);

    $companions = Doctrine :: getTable('Companion')
    ->createQuery('c')
    ->where('c.shop_id=?', $Shop_id)
    ->orderBy('c.list_order DESC')
    ->execute();
    $this->companions = $companions;

    $adjust = 0;

     if(strtotime(date("H:i")) <= strtotime("02:00"))
     {
       $adjust = 1;
     }

    if ($request->getParameter('updatetimeup'))
    {
      $companions = Doctrine :: getTable('Companion')
      ->createQuery('c')
      ->execute();
      foreach($companions as $c)
      {
        $q = Doctrine_Query :: create()
        ->select('s.*')
        ->from('Schedule s')
        ->innerJoin('s.Companion c')
        ->where('c.id=?', $c->getId())
        ->andWhere('s.date=?', date("Y-m-d 00:00:00", strtotime("+$adjust day")));

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

    $this->Shop_id = $Shop_id;
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CompScheForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest :: POST));

    $Shop_id = $this->getUser()->getAttribute('shop_id');
    $this->Shop_id = $Shop_id;

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

    $Shop_id = $this->getUser()->getAttribute('shop_id');
    $this->Shop_id = $Shop_id;

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

    $Shop_id = $this->getUser()->getAttribute('shop_id');

    $this->forward404Unless($companion = Doctrine :: getTable('Companion')->find(array (
      $request->getParameter('id')
    )), sprintf('Object companion does not exist (%s).', $request->getParameter('id')));
    $companion->delete();

    $this->redirect('comp_sche/index?shop_id={$Shop_id}');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $Shop_id = $this->getUser()->getAttribute('shop_id');

    $comp = $request->getParameter('companion');
    if(isset($comp['weeks_list']))
    {
      $companionWeeks = $comp['weeks_list'];
    }
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
          if($cs[$i]['outtime'] != null) $cs[$i]['outtime'] = null;
        }
      }
    }

    $comp['schedules'] = $cs;
    $request->setParameter('companion', $comp);

    $deleted = Doctrine_Query::create()
    ->delete()
    ->from('Schedule')
    ->where('date < ?', date("Y-m-d", strtotime("-1 week")))
    ->execute();

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
        $this->redirect('comp_sche/index?shop_id='.$Shop_id);
      }
      $this->redirect('comp_sche/edit?id=' . $companion->getId());
    }
  }
}