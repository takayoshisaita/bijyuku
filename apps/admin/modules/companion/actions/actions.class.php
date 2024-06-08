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
//    $this->companions = Doctrine::getTable('Companion')
//      ->createQuery('a')
//      ->execute();

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

    $companions = $shop[0]->getCompanions();
    $this->companions = $companions;

  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CompanionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

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

    $comp = new Companion();
    $comp->setShopId($shop[0]->getId());

    $this->form = new CompanionForm($comp);

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($companion = Doctrine::getTable('Companion')->find(array($request->getParameter('id'))), sprintf('Object companion does not exist (%s).', $request->getParameter('id')));
    $this->form = new CompanionForm($companion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($companion = Doctrine::getTable('Companion')->find(array($request->getParameter('id'))), sprintf('Object companion does not exist (%s).', $request->getParameter('id')));
    $this->form = new CompanionForm($companion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($companion = Doctrine::getTable('Companion')->find(array($request->getParameter('id'))), sprintf('Object companion does not exist (%s).', $request->getParameter('id')));
    $companion->delete();

    $this->redirect('companion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $companion = $form->save();

      $this->redirect('companion/edit?id='.$companion->getId());
    }
  }
}
