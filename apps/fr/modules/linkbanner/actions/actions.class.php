<?php

/**
 * linkbanner actions.
 *
 * @package    bijyuku
 * @subpackage linkbanner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class linkbannerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $shop_id = 1;

    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $route = ShopTable::getRoute($shop_id);
    $this->Route = $route;

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $linkbanner = Doctrine::getTable('LinkBanner')
      ->createQuery('a')
      ->where('a.shop_id=?', $shop_id)
      ->execute();

    $this->Linkbanners = $linkbanner;
    $this->Shop_id = $shop_id;
  }

}
