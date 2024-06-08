<?php

/**
 * event actions.
 *
 * @package    bijyuku
 * @subpackage event
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $this->Route = ShopTable::getRoute($shop_id);

    $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->addWhere('e.shop_id=?', $shop_id)
      ->orderBy('e.disp_order DESC')
      ;

    if($request->hasParameter('id'))
    {
      $id = $request->getParameter('id');
      $q->addWhere('e.id=?', $id);
    }

    $this->Events = $q->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $this->Shop_id = $shop_id;
    $this->Route = ShopTable::getRoute($shop_id);

    $id = $request->getParameter('id');

//    $this->Event = Doctrine::getTable('Event')->find(array($request->getParameter('id')));
//    $this->forward404Unless($this->Event);


//    $q = Doctrine_Query::create()
//      ->select('e.*')
//      ->from('Event e')
//      ->where('e.is_active=true')
//      ->andWhere('e.id=?', $id)
//      ->limit(1)
//      ;
//
//    $events = $q->fetchArray();
//    $this->Events = $events;

     $q = Doctrine_Query::create()
      ->select('e.*')
      ->from('Event e')
      ->where('e.is_active=true')
      ->addWhere('e.id=?', $id)
      ->limit(1)
      ;

     $events = $q->execute();
     $this->Events = $events;
  }
}
