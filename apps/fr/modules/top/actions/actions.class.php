<?php

/**
 * top actions.
 *
 * @package    bijyuku
 * @subpackage top
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class topActions extends sfActions
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

    $this->forward404Unless($shops = Doctrine::getTable('Shop')->find(array($shop_id)), sprintf('お探しの店舗が見つかりません：店舗ID(%s).', $shop_id));

    $this->shops = $shops;
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->shops = Doctrine::getTable('Shop')
      ->createQuery('a')
      ->execute();

    $this->setLayout('layout_show');
  }

  public function executeBlog(sfWebRequest $request)
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

    $this->forward404Unless($shops = Doctrine::getTable('Shop')->find(array($shop_id)), sprintf('お探しの店舗が見つかりません：店舗ID(%s).', $shop_id));

    $this->shops = $shops;
  }

}
