<?php
class companionComponents extends sfComponents
{
  public function executeGeticons()
  {
    $q = Doctrine_Query::create()
        ->select('ci.*,' .
             'i.name,' .
             'i.pic')
        ->from('CompanionIcon ci')
        ->innerJoin('ci.Companion c')
        ->innerJoin('ci.Icon i')
        ->where('c.id=?', $this->cid);

    $compicon = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    $this->Icons = $compicon;
  }

  // コンパニオン一覧表示用メソッド(Mobile版)
  public function executeCompanionslistmob()
  {
    $pager = new sfDoctrinePager('Companion', 5);
    $this->pager = $pager;
    $this->pager->setQuery(CompanionTable::getActiveCompanionsQuery());
    $this->pager->setPage($this->getRequest()->getParameter('page', 1));
    $this->pager->init();

    $this->Companions = $pager->getResults();
  }

}
