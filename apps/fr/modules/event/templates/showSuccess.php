<div style="background-color:#F5C2D7; margin-bottom:6px; text-align: left;">

<?php foreach($Events as $Event): ?>
<h2 style="font-size: medium;font-weight: bolder;height: 100%;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
<?php echo $Event->getTitle() ?>
</h1>

<?php echo image_tag('/uploads/event/'.$Event->getPic(), array('width'=>'240px', 'style'=>'margin: 0 auto 4px;')) ?>
<?php echo $Event->getComment(ESC_RAW) ?>
<?php endforeach; ?>

</div>
<a href="<?php echo url_for('event/index') ?>">&gt;&gt;イベント一覧に戻る</a>
