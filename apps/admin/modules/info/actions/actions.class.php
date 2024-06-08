<?php

/**
 * info actions.
 *
 * @package    bijyuku
 * @subpackage info
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class infoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->infos = Doctrine::getTable('Info')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new InfoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new InfoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($info = Doctrine::getTable('Info')->find(array($request->getParameter('id'))), sprintf('Object info does not exist (%s).', $request->getParameter('id')));
    $this->form = new InfoForm($info);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($info = Doctrine::getTable('Info')->find(array($request->getParameter('id'))), sprintf('Object info does not exist (%s).', $request->getParameter('id')));
    $this->form = new InfoForm($info);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($info = Doctrine::getTable('Info')->find(array($request->getParameter('id'))), sprintf('Object info does not exist (%s).', $request->getParameter('id')));
    $info->delete();

    $this->redirect('info/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $info = $form->save();

      $this->redirect('info/edit?id='.$info->getId());
    }
  }
}
