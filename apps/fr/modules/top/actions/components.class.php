<?php
class topComponents extends sfComponents
{
  public function executeMenu()
  {
  }
/*
  // TOPページのイベントバナー表示ウィジェット
  public function executeEventwidget(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }
    $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->addWhere('e.shop_id=?', $shop_id)
      ->orderBy('e.disp_order_at DESC')
      ;

    if($request->hasParameter('id'))
    {
      $id = $request->getParameter('id');
      $q->addWhere('e.id=?', $id);
    }

//    $q = Doctrine_Query::create()
//      ->select('e.*')
//      ->from('Event e')
//      ->where('e.is_active=true')
//      ->orderBy('e.disp_order')
//      ;

    $events = $q->fetchArray();
    $this->Events = $events;
  }

  // モバイルサイト用TOPページのイベントバナー表示ウィジェット
  public function executeEventwidgetmob()
  {
    $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->orderBy('e.disp_order')
      ->limit(1)
      ;

    $events = $q->fetchArray();
    $this->Events = $events;
  }

  // PRICEページのイベントバナー表示ウィジェット
  public function executeEventwidgetprice()
  {
    $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->andWhere('e.show_in_pricepage=true')
      ->orderBy('e.disp_order')
      ;

    $events = $q->fetchArray();
    $this->Events = $events;
  }
*/
  // TOPページのトピック表示ウィジェット
  public function executeTopicwidget(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }
    $this->Shop_id = $shop_id;

    $q = Doctrine_Query::create()
      ->select('t.*')
      ->from('Topic t')
      ->where('t.is_published=true')
      ->addWhere('t.shop_id=?', $shop_id)
      ->orderBy('t.created_at DESC')
      ;

    if($request->hasParameter('id'))
    {
      $id = $request->getParameter('id');
      $q->addWhere('e.id=?', $id);
    }

    $topics = $q->execute();
    $this->Topics = $topics;

    $weeks = WeekTable :: getWeekArrSun();
    $this->Weeks = $weeks;
  }

  public function executeMenutani9()
  {
    $this->executeMenu();
  }

  public function executeMenujuso()
  {
    $this->executeMenu();
  }

  public function executeMenums()
  {
    $this->executeMenu();
  }

  public function executeMenunb()
  {
    $this->executeMenu();
  }

  public function executeMenumob()
  {
  }

  public function executeMenumobkobe()
  {
  }

  public function executeMenumobjuso()
  {
  }

  public function executeMenumobms()
  {
  }

  public function executeMenumobnb()
  {
  }

  public function executeMenusb()
  {
    $this->executeMenumob();
  }

  public function executeMenudc()
  {
    $this->executeMenumob();
  }

}