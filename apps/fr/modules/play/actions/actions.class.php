<?php

/**
 * play actions.
 *
 * @package    bijyuku
 * @subpackage play
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class playActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Shop_id = $shop_id;
    $this->Route = ShopTable::getRoute($shop_id);

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);
  }
}
