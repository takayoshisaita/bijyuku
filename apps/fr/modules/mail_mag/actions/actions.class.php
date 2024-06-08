<?php

/**
 * mail_mag actions.
 *
 * @package    bijyuku
 * @subpackage mail_mag
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mail_magActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
//    $this->mail_mags = Doctrine::getTable('MailMag')
//      ->createQuery('a')
//      ->execute();

    $shop_id = 1;
    if($request->hasParameter('shop'))
    {
      $shop_id = $request->getParameter('shop');
    }

    $this->Shop_id = $shop_id;

    $layoutname = ShopTable::getLayoutName($shop_id);
    $this->setLayout($layoutname);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MailMagForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MailMagForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mail_mag = Doctrine::getTable('MailMag')->find(array($request->getParameter('id'))), sprintf('Object mail_mag does not exist (%s).', $request->getParameter('id')));
    $this->form = new MailMagForm($mail_mag);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mail_mag = Doctrine::getTable('MailMag')->find(array($request->getParameter('id'))), sprintf('Object mail_mag does not exist (%s).', $request->getParameter('id')));
    $this->form = new MailMagForm($mail_mag);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mail_mag = Doctrine::getTable('MailMag')->find(array($request->getParameter('id'))), sprintf('Object mail_mag does not exist (%s).', $request->getParameter('id')));
    $mail_mag->delete();

    $this->redirect('mail_mag/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mail_mag = $form->save();

      $this->doSend($mail_mag);

      $this->redirect('mail_mag/edit?id='.$mail_mag->getId());
    }
  }

  protected function doSend(MailMag $mail_mag)
  {
    // メールを送信する
    $title = "美熟な奥さんから";
echo "FILE:".__FILE__." LINE:".__LINE__."<br />";//debug
    $message = $this->getMailer()->compose(
    array('takayoshi@mens-navi.com' => '美熟な奥さんオフィシャルサイト'),
    array('aaa@takayoshi-saita.com' => 'テスト受信者'),
    $title,
    <<<EOF
サイトよりお問い合わせがありました。
内容ご確認の上、返信をお願いします。

お問い合わせ内容：$title
--
美熟な奥さん

EOF
    );
echo "FILE:".__FILE__." LINE:".__LINE__."<br />";//debug

    $result = $this->getMailer()->send($message);
echo "FILE:".__FILE__." LINE:".__LINE__."<br />";//debug
  }

}
