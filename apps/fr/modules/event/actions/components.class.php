<?php
class eventComponents extends sfComponents
{
  public function executeMenu()
  {
  }

  // TOPページのイベントバナー表示ウィジェット
  public function executeEventwidget(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Route = ShopTable::getRoute($shop_id);

    $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->addWhere('e.shop_id=?', $shop_id)
      ->orderBy('e.disp_order DESC')
      ;

    $events = $q->fetchArray();
    $this->Events = $events;
  }

  // TOPページのイベントバナー表示ウィジェット
  public function executeEventwidgetbx(sfWebRequest $request)
  {
        $this->executeEventwidget($request);
  }

  // モバイルサイト用TOPページのイベントバナー表示ウィジェット
  public function executeEventwidgetmob(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Route = ShopTable::getRoute($shop_id);

    $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->addWhere('e.shop_id=?', $shop_id)
      ->orderBy('e.disp_order DESC')
      ->limit(1)
      ;

    $events = $q->fetchArray();
    $this->Events = $events;
  }

  // PRICEページのイベントバナー表示ウィジェット
  public function executeEventwidgetprice(sfWebRequest $request)
  {
    require_once(sfConfig::get('sf_web_dir').'/class-image/class.image.php');

    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Route = ShopTable::getRoute($shop_id);

    $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->addWhere('e.shop_id=?', $shop_id)
      ->andWhere('e.show_in_pricepage=true')
      ->orderBy('e.disp_order DESC')
      ;

    $events = $q->fetchArray();

    // リサイズ＆トリミング処理
    foreach($events as $event)
    {
      $target_dir = sfConfig::get('sf_upload_dir');
      $thumb = new Image($target_dir.'/event/'.$event['pic']);

      if(!file_exists($target_dir.'/event/thumb/'.$event['pic']))
      {
        $thumb->dir($target_dir.'/event/thumb');
        $thumb->width(220);
        $thumb->save();
      }
    }
    $this->Events = $events;
  }

  // PRICEページのイベントバナー表示ウィジェットfor Mobile
  public function executeEventwidgetpricemob(sfWebRequest $request)
  {
    $this->executeEventwidgetprice($request);
  }
/*
  // TOPページのトピック表示ウィジェット
  public function executeTopicwidget(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Route = ShopTable::getRoute($shop_id);

    $q = Doctrine_Query::create()
      ->select('t.*')
      ->from('Topic t')
      ->where('t.is_published=true')
      ->addWhere('t.shop_id=?', $shop_id)
      ->orderBy('t.created_at')
      ;

//    $topics = $q->fetchArray();
    $topics = $q->execute();
    $this->Topics = $topics;
  }
*/
  public function executeMenumob()
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