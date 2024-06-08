<?php

/**
 * inquiry actions.
 *
 * @package    bijyuku
 * @subpackage inquiry
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inquiryActions extends sfActions
{
  public function executeNew(sfWebRequest $request)
  {
    $shop_id = 1;

    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $route = ShopTable::getRoute($shop_id);
    $this->Route = $route;

    $shop = Doctrine::getTable('Shop')->find($shop_id);
    $this->Telno = $shop->getTelno();
    $this->Email = $shop->getEmail();

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $tid = $request->getParameter('tid');
    $this->Tid = $tid;
    $this->getUser()->setAttribute('tid', $tid);

    $this->form = new InquiryForm();
    $this->form->setDefault('title_id', $tid);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $shop_id = 1;

    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

//    $this->Shop_id = $shop_id;

    $shop = Doctrine::getTable('Shop')->find($shop_id);
    $this->Telno = $shop->getTelno();

    $this->form = new InquiryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

/*
  public function executeEdit(sfWebRequest $request)
  {
//    $this->forward404Unless($inquiry = Doctrine::getTable('Inquiry')->find(array($request->getParameter('id'))), sprintf('Object inquiry does not exist (%s).', $request->getParameter('id')));

    $shop_id = 1;

    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    $inquiry = new Inquiry();
    $inquiry->setTitleId($request->getParameter('tid'));

    $this->Shop_id = $shop_id;
    $this->form = new InquiryForm($inquiry);

    $shop = Doctrine::getTable('Shop')->find($shop_id);
    $this->Telno = $shop->getTelno();
  }
*/

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($inquiry = Doctrine::getTable('Inquiry')->find(array($request->getParameter('id'))), sprintf('Object inquiry does not exist (%s).', $request->getParameter('id')));
    $this->form = new InquiryForm($inquiry);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeThanks(sfWebRequest $request)
  {

    $shop_id = 1;

    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $shop_id = 1;

    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Shop_id = $shop_id;

    $route = ShopTable::getRoute($shop_id);
    $this->Route = $route;

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);

    switch($shop_id){
      case 1:
        $mailadd = 'info@bijyuku.com';
        break;
      case 2:
        $mailadd = 'kobe@bijyuku.com';
        break;
      case 3:
        $mailadd = 'juso@bijyuku.com';
        break;
      case 5:
        $mailadd = '2pon@bijyuku.com';
        break;
      default:
        $mailadd = 'info@bijyuku.com';
        break;
    }

    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $inquiry = $form->save();

      // メールを送信する
      $title = $inquiry->getInquiryTitle();
      $name = $inquiry->getName()."様";
      $email = $inquiry->getEmail();
      $comment = $inquiry->getComment();

      $message = $this->getMailer()->compose(
        array($mailadd => '美熟な奥さんオフィシャルサイト'),
        array($mailadd => '美熟な奥さん'),
        $title."：".$name,
        <<<EOF
サイトよりお問い合わせがありました。
内容ご確認の上、返信をお願いします。

お名前：$name
E-MAIL：$email
お問い合わせ内容：$title
$comment
--
美熟な奥さん

EOF
      );

      $this->getMailer()->send($message);

//      $this->redirect('@kobe_default?module=inquiry&action=thanks');
      $this->redirect($route.'?module=inquiry&action=thanks');

//      $this->foword('inquiry/thanks/shop/'.$shop_id);
    }
  }
}
