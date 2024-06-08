<?php

/**
 * price actions.
 *
 * @package    fu-meets
 * @subpackage price
 * @author     Your name here
 */
class priceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Prices = PricePeer::doSelect(new Criteria());
  }

  public function executeNew(sfWebRequest $request)
  {
    $user = $this->getUser();
    $price = new Price();

    if($user)
    {
      $shop = ShopPeer::doSelectOne(ShopPeer::USER_ID, $user->getUsername());
      $price->Shop = $shop;

      if($user->getUsername() != $price->Shop->getUserId())
      {
        $this->forward('error', 'error401');
      }
    }

    $this->form = new PriceForm($price);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PriceForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $user = $this->getUser();

    $this->forward404Unless($Price = PricePeer::retrieveByPk($request->getParameter('id')), sprintf('ID：%sの料金表が見つかりません。', $request->getParameter('id')));

    $Shop = ShopPeer::retrieveByPk($Price->getShopId());

    if($user->getUsername() != $Shop->getUserId())
    {
      $this->forward('error', 'error401');
    }

    $this->form = new PriceForm($Price);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Price = PricePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Price does not exist (%s).', $request->getParameter('id')));
    $this->form = new PriceForm($Price);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Price = PricePeer::retrieveByPk($request->getParameter('id')), sprintf('Object Price does not exist (%s).', $request->getParameter('id')));
    $Price->delete();

    $this->redirect('price/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Price = $form->save();

      $this->redirect('price/edit?id='.$Price->getId());
    }
  }
}
