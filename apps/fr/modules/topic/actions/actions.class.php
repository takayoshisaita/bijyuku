<?php

/**
 * topic actions.
 *
 * @package    bijyuku
 * @subpackage topic
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class topicActions extends sfActions
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

    $this->topics = $q->execute();

    $weeks = WeekTable :: getWeekArrSun();
    $this->Weeks = $weeks;

    $this->Route = ShopTable::getRoute($shop_id);;
    $this->Shop_id = $shop_id;
  }

  public function executeShow(sfWebRequest $request)
  {
    $topic = Doctrine::getTable('Topic')->find(array($request->getParameter('id')));
    $this->forward404Unless($topic);

    $this->topic = $topic;

    $shop_id = 1;
    if($topic->getShop())
    {
      $shop_id = $topic->getShop()->getId();
    }

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $this->Route = ShopTable::getRoute($shop_id);
  }

}
