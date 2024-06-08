<?php

/**
 * system actions.
 *
 * @package    bijyuku
 * @subpackage system
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class systemActions extends sfActions
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

    $shop = Doctrine::getTable('Shop')->find($shop_id);
    $this->Telno = $shop->getTelno();

//    $this->Maps = Doctrine::getTable('Map')
//                   ->createQuery('m')
//                   ->where('m.shop_id=?', $shop_id)
//                   ;

    $this->Maps = $shop->getMaps();
    $this->Shop_id = $shop_id;
  }
}
