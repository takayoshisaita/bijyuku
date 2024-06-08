<?php

/**
 * companion actions.
 *
 * @package    bijyuku
 * @subpackage companion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class companionActions extends sfActions
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

    $this->Route = ShopTable::getRoute($shop_id);

    $this->companions = CompanionTable::getActiveCompanionsQuery($shop_id)->execute();

    $pager = new sfDoctrinePager('Companion', 5);
    $this->pager = $pager;
    $this->pager->setQuery(CompanionTable::getActiveCompanionsQuery($shop_id));
    $this->pager->setPage($this->getRequest()->getParameter('page', 1));
    $this->pager->init();

    $this->Companions = $pager->getResults();

    $rankpics = Doctrine::getTable('Rank')
                ->createQuery('r')
                ->orderBy('r.id DESC')
                ->execute();

    $this->Rankpics = $rankpics;
  }

  public function executeShow(sfWebRequest $request)
  {
    require_once(sfConfig::get('sf_web_dir').'/class-image/class.image.php');

    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }
    $this->Shop_id = $shop_id;

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $this->Route = ShopTable::getRoute($shop_id);

    $id = $request->getParameter('id');

    $q = Doctrine_Query :: create()
           ->select('c.*, r.pic as rankpic')
           ->from('Companion c')
           ->where('c.id=?', $id)
           ->leftJoin('c.Rank r')
           ->orderBy('c.list_order DESC');

    $c = $q->execute();
    $this->Companion = $c[0];

    $picnum = array();
    for($i=1; $i<5; $i++)
    {
      if($c[0]['pic'.$i])
      {
        // リサイズ＆トリミング処理
        $target_dir = sfConfig::get('sf_upload_dir');

        if(!file_exists($target_dir.'/companion/thumb/'.$c[0]['pic'.$i]))
        {
          $thumb = new Image($target_dir.'/companion/'.$c[0]['pic'.$i]);
          $thumb->dir($target_dir.'/companion/thumb');
          $thumb->width(120);
          $thumb->save();
        }

        array_push($picnum, $i);
      }
    }
    $this->Picnums = $picnum;
    $this->weekArray = ScheduleTable::getWeekArray();

    $this->Picno = 1;
    if($request->getParameter('pic'))
    {
      $this->Picno = $request->getParameter('pic');
    }
  }

  public function executePopup(sfWebRequest $request)
  {
    require_once(sfConfig::get('sf_web_dir').'/class-image/class.image.php');

    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }
    $this->Shop_id = $shop_id;
    $this->Route = ShopTable::getRoute($shop_id);

    $id = $request->getParameter('id');

    $q = Doctrine_Query :: create()
           ->select('c.*, r.pic as rankpic')
           ->from('Companion c')
           ->where('c.id=?', $id)
           ->leftJoin('c.Rank r')
           ->orderBy('c.list_order DESC');

    $c = $q->execute();
    $this->Companion = $c[0];

    $picnum = array();
    for($i=1; $i<5; $i++)
    {
      if($c[0]['pic'.$i])
      {
        // リサイズ＆トリミング処理
        $target_dir = sfConfig::get('sf_upload_dir');

        if(!file_exists($target_dir.'/companion/thumb/'.$c[0]['pic'.$i]))
        {
          $thumb = new Image($target_dir.'/companion/'.$c[0]['pic'.$i]);
          $thumb->dir($target_dir.'/companion/thumb');
          $thumb->width(120);
          $thumb->save();
        }

        array_push($picnum, $i);
      }
    }
    $this->Picnums = $picnum;
    $this->weekArray = ScheduleTable::getWeekArray();

    $this->Picno = 1;
    if($request->getParameter('pic'))
    {
      $this->Picno = $request->getParameter('pic');
    }
  }

}
