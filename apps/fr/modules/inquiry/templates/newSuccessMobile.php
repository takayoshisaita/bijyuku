<div id="inquiryform">
<h1 style="font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
◆◇お問い合わせ◇◆
</h1>
<p>以下のフォームからお送り頂くか、直接お電話下さい。</p>
<a href="tel:<?php echo $Telno ?>"><?php echo $Telno ?></a>
<br />
<br />
  「※」の項目は必須です
<?php include_partial('formMobile', array('form' => $form, 'Route' => $Route)) ?>

</div>