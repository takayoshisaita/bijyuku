<?php

require_once dirname(__FILE__).'/../lib/shopGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/shopGeneratorHelper.class.php';

/**
 * shop actions.
 *
 * @package    bijyuku
 * @subpackage shop
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class shopActions extends autoShopActions
{
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? '店舗登録が完了しました。' : '店舗情報が更新されました。';

      try
      {
        $shop = $form->save();

        //---- sfGuard Userを自動追加する処理 2011.11.03 ----
        $pass = $shop->getPassword();

        $q = Doctrine::getTable('sfGuardUser')
               ->createQuery('u')
               ->where('username=?', $shop->getUserName());
        $user = $q->execute();

        if(!$user[0]->getUsername())
        {
          $sf_guard_user = new sfGuardUser();
          $sf_guard_user->setUsername($shop->getUserName());
          $sf_guard_user->setPassword($pass);
          $sf_guard_user->addPermissionByName('shop');
          $sf_guard_user->save();
        }
        //---- sfGuard Userを自動追加する処理 2011.11.03 ----
/*
        $price_crit = new Criteria();
        $price_crit->add(PricePeer::SHOP_ID, $shop->getId());
        $price = PricePeer::doSelectOne($price_crit);
*/
        $q = Doctrine::getTable('Price')
              ->createQuery('p')
              ->where('p.shop_id=?', $shop->getId());

        if(!$q->execute())
        {
          $Price = new Price();
          $Price->setShopId($shop->getId());
          $Price->save();
        }

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $shop)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' 続けて新しい店舗を追加できます。');

          $this->redirect('@shop_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'shop_edit', 'sf_subject' => $shop));
        }

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

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $shop)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@shop_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'shop_edit', 'sf_subject' => $shop));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

}
