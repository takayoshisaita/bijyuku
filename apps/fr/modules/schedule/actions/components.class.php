<?php
class scheduleComponents extends sfComponents
{
  public function getAdjust()
  {
      $adjust = 0;
      if(strtotime(date("H:i")) <= strtotime("02:00"))
      {
        $adjust = 1;
      }

      return $adjust;
  }

  public function executeSchedulewidget(sfWebRequest $request)
  {
    // PICKUP TOPコンパニオンデータの作成
    //    $q = Doctrine::getTable('schedule')
    //         ->createQuery('s')
    //         ->select('s.*, c.*')
    //         ->where('s.date=?',date("Y-m-d"))
    //         ->andWhere('s.outtime>?',time())
    //         ->innerJoin('s.Companion c');

    $adjust = $this->getAdjust();

    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Shop_id = $shop_id;
    $this->Route = ShopTable::getRoute($shop_id);

    $q = Doctrine_Query :: create()->select(
        's.*,' .
        'c.id as cid,' .
        'c.pic1 as pic1,' .
        'c.name as name,' .
        'c.age as age,' .
        'c.t as t,' .
        'c.b as b,' .
        'c.cup as cup,' .
        'c.w as w,' .
        'c.h as h,' .
        'c.timeup as timeup,' .
        'c.item8 as item8,' .
        'r.pic as rankpic')
      ->from('Schedule s')

      ->where('s.date=?', date("Y-m-d", strtotime("-$adjust day")))
      ->andWhere('c.timeup>?', "2:00:00")
      ->addWhere('c.shop_id=?', $shop_id)

      ->leftJoin('s.Companion c')
      ->leftJoin('c.Rank r')

      ->orderBy('c.timeup');

    $schedules = $q->fetchArray();

    $q = Doctrine_Query :: create()->select(
        's.*,' .
        'c.id as cid,' .
        'c.pic1 as pic1,' .
        'c.name as name,' .
        'c.age as age,' .
        'c.t as t,' .
        'c.b as b,' .
        'c.cup as cup,' .
        'c.w as w,' .
        'c.h as h,' .
        'c.timeup as timeup,' .
        'c.item8 as item8,' .
        'r.pic as rankpic')
      ->from('Schedule s')

      ->where('s.date=?', date("Y-m-d", strtotime("-$adjust day")))
      ->andWhere('c.timeup<?', "2:00:00")
      ->addWhere('c.shop_id=?', $shop_id)

      ->leftJoin('s.Companion c')
      ->leftJoin('c.Rank r')

      ->orderBy('c.timeup');

    $schedules1 = $q->fetchArray();

    $q = Doctrine_Query :: create()->select(
        's.*,' .
        'c.id as cid,' .
        'c.pic1 as pic1,' .
        'c.name as name,' .
        'c.age as age,' .
        'c.t as t,' .
        'c.b as b,' .
        'c.cup as cup,' .
        'c.w as w,' .
        'c.h as h,' .
        'c.item8 as item8,' .
        'r.pic as rankpic')
      ->from('Schedule s')

      ->where('s.date=?', date("Y-m-d", strtotime("-$adjust day")))
      ->andWhere('c.timeup is NULL')
      ->addWhere('c.shop_id=?', $shop_id)

      ->leftJoin('s.Companion c')
      ->leftJoin('c.Rank r')

      ->orderBy('s.intime');

    $schedules2 = $q->fetchArray();

    $q = Doctrine_Query :: create()->select(
        's.*,' .
        'c.id as cid,' .
        'c.pic1 as pic1,' .
        'c.name as name,' .
        'c.age as age,' .
        'c.t as t,' .
        'c.b as b,' .
        'c.cup as cup,' .
        'c.w as w,' .
        'c.h as h,' .
        'c.timeup as timeup,' .
        'c.item8 as item8,' .
        'r.pic as rankpic')
      ->from('Schedule s')

      ->where('s.date=?', date("Y-m-d", strtotime("-$adjust day")))
      ->andWhere('c.timeup=?', "2:00:00")
      ->addWhere('c.shop_id=?', $shop_id)

      ->leftJoin('s.Companion c')
      ->leftJoin('c.Rank r')

      ->orderBy('s.intime');

    $schedules3 = $q->fetchArray();

    $this->Schedules = array_merge($schedules, $schedules1, $schedules2, $schedules3);
  }

  public function getCompSchedule($i)
  {
    $adjust = $this->getAdjust();

    if ($i == 0)
    {
      $str = "-$adjust day";
    }
    else
    {
      $i -= $adjust;
      $str = "+$i day";
    }

      $q = Doctrine_Query :: create()
        ->select('s.*')
        ->from('Schedule s')
        ->innerJoin('s.Companion c')
        ->where('c.id=?', $this->cid)
        ->andWhere('s.date=?', date("Y-m-d 00:00:00", strtotime($str)));

      $result = $q->execute();
      if (!$result[0]['id'])
      {
        $sc = new Schedule();
        $sc->setDate(date("Y-m-d 00:00:00", strtotime($str)));
        $sc->setIntime('');
        $sc->setOuttime('');
        return $sc;
      }
      else
      {
        return $result[0];
      }
  }

  public function executeGetCompanionSchedule(sfWebRequest $request)
  {
    $shop_id = 1;
    $days = 7;

    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }
    $this->Shop_id = $shop_id;

    if($shop_id == 2)
    {
      $days = 3;
    }

    $schedules = array ();

    for($i=0; $i<$days; $i++)
    {
      $schedules[] = $this->getCompSchedule($i);
    }

    $this->Schedules = $schedules;
  }

  public function executeGetCompanionScheduleMob(sfWebRequest $request)
  {
    $this->executeGetCompanionSchedule($request);
  }
}