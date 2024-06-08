<?php

/**
 * price actions.
 *
 * @package    bijyuku
 * @subpackage price
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class priceActions extends sfActions
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

    $prices = Doctrine::getTable('Price')
      ->createQuery('p')
      ->where('p.shop_id=?', $shop_id)
      ->orderBy('p.category_id')
      ->execute();

    $this->Prices = $prices;
    $this->Shop_id = $shop_id;
  }

}
