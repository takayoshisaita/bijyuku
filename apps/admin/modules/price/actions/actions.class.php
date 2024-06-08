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
    $user = $this->getUser();

    if($user)
    {
      $shop = Doctrine::getTable('Shop')
        ->createQuery('s')
        ->where('s.username=?', $user->getUsername())
        ->execute();

      if($user->getUsername() != $shop[0]->getUserName())
      {
        $this->forward('error', 'error401');
      }
    }

    $this->prices = $shop[0]->getPrices();
  }

  public function executeNew(sfWebRequest $request)
  {
    $user = $this->getUser();
    $price = new Price();

    if($user)
    {
      $shop = Doctrine::getTable('Shop')
        ->createQuery('s')
        ->where('s.username=?', $user->getUsername())
        ->execute();

      $price->Shop = $shop[0];

      if($user->getUsername() != $price->Shop->getUserName())
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

    $this->forward404Unless($price = Doctrine::getTable('Price')->find(array($request->getParameter('id'))), sprintf('Object price does not exist (%s).', $request->getParameter('id')));

    $Shop = $price->getShop();

    if($user->getUsername() != $Shop->getUsername())
    {
      $this->forward('error', 'error401');
    }

    $this->form = new PriceForm($price);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($price = Doctrine::getTable('Price')->find(array($request->getParameter('id'))), sprintf('Object price does not exist (%s).', $request->getParameter('id')));
    $this->form = new PriceForm($price);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($price = Doctrine::getTable('Price')->find(array($request->getParameter('id'))), sprintf('Object price does not exist (%s).', $request->getParameter('id')));
    $price->delete();

    $this->redirect('price/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $price = $form->save();

      $this->redirect('price/edit?id='.$price->getId());
    }
  }
}
