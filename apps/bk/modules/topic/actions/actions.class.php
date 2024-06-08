<?php

require_once dirname(__FILE__).'/../lib/topicGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/topicGeneratorHelper.class.php';

/**
 * topic actions.
 *
 * @package    bijyuku
 * @subpackage topic
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class topicActions extends autoTopicActions
{
  function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $topic = $form->save();

      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $topic)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@topic_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

//        $this->redirect(array('sf_route' => 'topic_edit', 'sf_subject' => $topic));
        $this->redirect(array('sf_route' => 'topic', 'sf_subject' => $topic));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

  public function executeBatchPublish(sfWebRequest $request)
  {
  	$ids = $request->getParameter('ids');

  	$q = Doctrine_Query::create()
  	->from('Topic t')
  	->whereIn('t.id', $ids);

  	foreach ($q->execute() as $topic)
  	{
  		$topic->publish(true);
  	}

  	$this->getUser()->setFlash('notice', 'トピックを公開しました。');

  	$this->redirect('topic');
  }

  public function executeBatchSuspend(sfWebRequest $request)
  {
  	$ids = $request->getParameter('ids');

  	$q = Doctrine_Query::create()
  	->from('Topic t')
  	->whereIn('t.id', $ids);

  	foreach ($q->execute() as $topic)
  	{
  		$topic->publish(false);
  	}

  	$this->getUser()->setFlash('notice', 'トピックを非公開にしました。');

  	$this->redirect('topic');
  }

}
