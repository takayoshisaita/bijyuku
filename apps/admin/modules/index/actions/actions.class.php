<?php

/**
 * index actions.
 *
 * @package    bijyuku
 * @subpackage index
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class indexActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->shops = Doctrine::getTable('Shop')
      ->createQuery('a')
      ->execute();
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

    $this->redirect('index/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $shop = $form->save();

      $this->redirect('index/edit?id='.$shop->getId());
    }
  }
}
