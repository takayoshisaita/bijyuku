<div id style="text-align: left;">

<div style="background-color:#728BD3; margin-bottom:6px;">
<div style="font-size: medium;font-weight: bolder;margin-bottom: 4px;padding-top: 4px;text-indent: 0;">
<?php echo date("m/d G:i", strtotime($topic->getCreatedAt())) ?><br />
<?php echo $topic->getTitle() ?>
</h1>
</div>
<hr size="1px" />
<?php if($topic->getPic()): ?>
<?php echo image_tag('/uploads/topic/'.$topic->getPic(), array('width'=>'240px', 'style'=>'margin: 0 auto 4px;'), true) ?>
<?php endif; ?>
<?php echo $topic->getComment(ESC_RAW) ?>

</div>

<a href="<?php echo url_for($Route.'?module=topic&action=index') ?>">&gt;&gt;新着情報一覧に戻る</a>
