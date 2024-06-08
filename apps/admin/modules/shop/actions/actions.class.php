<?php

/**
 * shop actions.
 *
 * @package    bijyuku
 * @subpackage shop
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class shopActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $q = Doctrine::getTable('Shop')
      ->createQuery('s');

    $user = $this->getUser();

echo "user->getUsername ： ".$user->getUsername()."<br />";//debug
    if($user)
    {
      $q->addWhere('s.username=?', $user->getUsername());
    }

    $Shop = $q->execute();
    $this->Shop = $Shop[0];

    if(!$this->Shop)
    {
      $this->getUser()->setFlash('error', '該当する店舗の登録がありません。<br />ユーザー名(ID)とパスワードをご確認の上再度ログインしてみて下さい。');
    }
    $this->forward404Unless($this->Shop);

  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShopForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShopForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($shop = Doctrine::getTable('Shop')->find(array($request->getParameter('id'))), sprintf('Object shop does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShopForm($shop);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($shop = Doctrine::getTable('Shop')->find(array($request->getParameter('id'))), sprintf('Object shop does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShopForm($shop);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($shop = Doctrine::getTable('Shop')->find(array($request->getParameter('id'))), sprintf('Object shop does not exist (%s).', $request->getParameter('id')));
    $shop->delete();

    $this->redirect('shop/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $shop = $form->save();

      $this->redirect('shop/edit?id='.$shop->getId());
    }
  }
}
