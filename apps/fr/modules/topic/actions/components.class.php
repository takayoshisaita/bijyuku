<?php
class topicComponents extends sfComponents
{
  // TOPページの新着一覧表示ウィジェット(mobile)
  public function executeTopicwidgetmob(sfWebRequest $request)
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
      ->orderBy('t.created_at DESC')
      ->limit(5)
      ;

    $this->Topics = $q->execute();

  }

}