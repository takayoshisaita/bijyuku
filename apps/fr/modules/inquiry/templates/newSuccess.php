<div id="contentinner">
<div class="title">
  <h1>◆◇お問い合わせ◇◆</h1>
</div>
<div id="inquiryform">
<p>以下のフォームからお送り頂くか、直接お電話又はメール下さい。<br />
<br />
電話：<a href="tel:<?php echo $Telno ?>"><?php echo $Telno ?></a><br />
E-Mail：<a href="mailto:<?php echo $Email ?>"><?php echo $Email ?></a>
</p>
<br />
  「※」の項目は必須です
  <?php include_partial('form', array('form' => $form, 'Route' => $Route)) ?>
</div>
</div>