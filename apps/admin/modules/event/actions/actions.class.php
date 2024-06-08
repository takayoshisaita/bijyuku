<?php

/**
 * event actions.
 *
 * @package    bijyuku
 * @subpackage event
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventActions extends sfActions
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

    $this->events = $shop[0]->getEvents();
  }

  public function executeNew(sfWebRequest $request)
  {
    $user = $this->getUser();
    $event = new Event();

    if($user)
    {
      $shop = Doctrine::getTable('Shop')
        ->createQuery('s')
        ->where('s.username=?', $user->getUsername())
        ->execute();

      $event->Shop = $shop[0];

      if($user->getUsername() != $event->Shop->getUserName())
      {
        $this->forward('error', 'error401');
      }
    }

    $this->form = new EventForm($event);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EventForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($event = Doctrine::getTable('Event')->find(array($request->getParameter('id'))), sprintf('Object event does not exist (%s).', $request->getParameter('id')));
    $this->form = new EventForm($event);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($event = Doctrine::getTable('Event')->find(array($request->getParameter('id'))), sprintf('Object event does not exist (%s).', $request->getParameter('id')));
    $this->form = new EventForm($event);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($event = Doctrine::getTable('Event')->find(array($request->getParameter('id'))), sprintf('Object event does not exist (%s).', $request->getParameter('id')));
    $event->delete();

    $this->redirect('event/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $event = $form->save();

      $this->redirect('event/edit?id='.$event->getId());
    }
  }
}
