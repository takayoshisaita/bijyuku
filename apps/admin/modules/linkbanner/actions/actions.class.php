<?php

/**
 * linkbanner actions.
 *
 * @package    bijyuku
 * @subpackage linkbanner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class linkbannerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->linkbanners = Doctrine::getTable('Linkbanner')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LinkbannerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LinkbannerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($linkbanner = Doctrine::getTable('Linkbanner')->find(array($request->getParameter('id'))), sprintf('Object linkbanner does not exist (%s).', $request->getParameter('id')));
    $this->form = new LinkbannerForm($linkbanner);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($linkbanner = Doctrine::getTable('Linkbanner')->find(array($request->getParameter('id'))), sprintf('Object linkbanner does not exist (%s).', $request->getParameter('id')));
    $this->form = new LinkbannerForm($linkbanner);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($linkbanner = Doctrine::getTable('Linkbanner')->find(array($request->getParameter('id'))), sprintf('Object linkbanner does not exist (%s).', $request->getParameter('id')));
    $linkbanner->delete();

    $this->redirect('linkbanner/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $linkbanner = $form->save();

      $this->redirect('linkbanner/edit?id='.$linkbanner->getId());
    }
  }
}
