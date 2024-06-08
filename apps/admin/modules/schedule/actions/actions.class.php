<?php

/**
 * schedule actions.
 *
 * @package    bijyuku
 * @subpackage schedule
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class scheduleActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->schedules = Doctrine::getTable('Schedule')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ScheduleForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ScheduleForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($schedule = Doctrine::getTable('Schedule')->find(array($request->getParameter('id'))), sprintf('Object schedule does not exist (%s).', $request->getParameter('id')));
    $this->form = new ScheduleForm($schedule);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($schedule = Doctrine::getTable('Schedule')->find(array($request->getParameter('id'))), sprintf('Object schedule does not exist (%s).', $request->getParameter('id')));
    $this->form = new ScheduleForm($schedule);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($schedule = Doctrine::getTable('Schedule')->find(array($request->getParameter('id'))), sprintf('Object schedule does not exist (%s).', $request->getParameter('id')));
    $schedule->delete();

    $this->redirect('schedule/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $schedule = $form->save();

      $this->redirect('schedule/edit?id='.$schedule->getId());
    }
  }
}
