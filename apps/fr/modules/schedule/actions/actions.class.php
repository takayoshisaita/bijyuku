<?php

/**
 * schedule actions.
 *
 * @package    bijyuku
 * @subpackage schedule
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class scheduleActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Shop_id = $shop_id;

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $this->Route = ShopTable::getRoute($shop_id);;

    $weekarr = WeekTable::getWeekArrSun();

    $adjust = 0;
    $next = 1;
    $second = 2;

    if( strtotime(date("H:i")) <= strtotime("02:00") )
    {
      $adjust = 1;
    }
    $next   -= $adjust;
    $second -= $adjust;

    $this->Today = date("m/d(", strtotime("-$adjust day")).$weekarr[date("w", strtotime("-$adjust day"))].')';
    $this->Nextday = date("m/d(", strtotime("+$next day")).$weekarr[date("w", strtotime("+$next day"))].')';
    $this->Secondday = date("m/d(", strtotime("+$second day")).$weekarr[date("w", strtotime("+$second day"))].')';

    $str = '';
    $day = $request->getParameter('day');

    $this->day0 = "current";
    $this->day1 = "";
    $this->day2 = "";
    $this->Today_njw = $this->Today;

    if($day)
    {
      switch($day)
      {
        case 1:
          $this->day0 = "";
          $this->day1 = "current";
          $this->day2 = "";
          $this->Today_njw = $this->Nextday;
          break;
        case 2:
          $this->day0 = "";
          $this->day1 = "";
          $this->day2 = "current";
          $this->Today_njw = $this->Secondday;
          break;
        default :
          break;
      }
      $day -= $adjust;
      $str = "+$day day";
    }
    else
    {
      $str = "-$adjust day";
    }

    // OPEN - 12:00
    $q = Doctrine_Query::create()
        ->select('s.*,' .
            'r.pic as rankpic'
            )
        ->from('Schedule s')
        ->where('s.date=?',date("Y-m-d", strtotime($str)))
        ->andWhere('s.intime<?',"12:00:00")
        ->andWhere('s.intime>=?',"10:00:00")
        ->andWhere('c.shop_id=?', $shop_id)
        ->leftJoin('s.Companion c')
        ->leftJoin('c.Rank r')
        ->orderBy('s.intime ASC')
        ->addOrderBy('s.outtime ASC');

    $this->Schedules0 = $q->execute();

    // 12:00 - 18:00
    $q = Doctrine_Query::create()
        ->select('s.*,' .
            'r.pic as rankpic'
            )
        ->from('Schedule s')
        ->where('s.date=?',date("Y-m-d", strtotime($str)))
        ->andWhere('s.intime<=?',"18:00:00")
        ->andWhere('s.intime>=?',"10:00:00")
        ->andWhere('c.shop_id=?', $shop_id)
        ->leftJoin('s.Companion c')
        ->leftJoin('c.Rank r')
        ->orderBy('s.intime ASC')
        ->addOrderBy('s.outtime ASC');

    $this->Schedules1 = $q->execute();

    // 18:00 - 翌2:00
    $q = Doctrine_Query::create()
        ->select('s.*,' .
            'r.pic as rankpic'
            )
        ->from('Schedule s')
        ->where('s.outtime>?',"18:00:00")
        ->andWhere('s.date=?',date("Y-m-d", strtotime($str)))
        ->andWhere('c.shop_id=?', $shop_id)
        ->orWhere('s.outtime<=?',"2:00:00")
        ->andWhere('s.date=?',date("Y-m-d", strtotime($str)))
        ->andWhere('c.shop_id=?', $shop_id)
        ->leftJoin('s.Companion c')
        ->leftJoin('c.Rank r')
        ->orderBy('s.intime ASC')
        ;

    $this->Schedules2 = $q->execute();

    // 携帯向け
    $q = Doctrine_Query::create()
        ->select('s.*,' .
            'r.pic as rankpic'
            )
        ->from('Schedule s')
        ->where('s.date=?',date("Y-m-d", strtotime($str)))
        ->andWhere('c.shop_id=?', $shop_id)
        ->leftJoin('s.Companion c')
        ->leftJoin('c.Rank r')
        ->orderBy('s.intime ASC')
        ->addOrderBy('s.outtime ASC');

    $this->SchedulesM = $q->execute();

  }

}
