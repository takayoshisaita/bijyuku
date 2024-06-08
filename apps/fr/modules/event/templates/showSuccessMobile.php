<h1 style="text-align:center; font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 8px;padding-top: 8px;text-indent: 0;">
◆◇イベント詳細◇◆
</h1>
<div style="background-color:rgba(220, 220, 220, 0.4); margin-bottom:6px; text-align: left;" class="clearfix">
<?php foreach($Events as $Event): ?>
<h2 style="
    background-image: url(/images/common/title_bk2.gif);
    background-repeat: repeat;
    color: #ffffff;
    font-weight: bold;
    margin-top: 0;
    padding: 6px;
    font-size:larger;">
<?php echo $Event->getTitle() ?>
</h2>
<div style="text-align:center;">
<?php echo image_tag('/uploads/event/'.$Event->getPic(), array('style'=>'width:100%; margin: 0 auto 4px;')) ?>
</div>
<?php echo $Event->getComment(ESC_RAW) ?>
<?php endforeach; ?>
</div>
<a href="<?php echo url_for($Route.'?module=event&action=index') ?>">&gt;&gt;イベント一覧に戻る</a>
