<h1 style="font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
◆◇新着情報◇◆
</h1>
<div id="topics">

<ul style="list-style-type:none;">
  <?php foreach ($topics as $topic): ?>
    <li style="border-bottom: 1px dotted #999999;text-align:left;"><a href="<?php echo url_for($Route.'?module=topic&action=show&id='.$topic->getId()) ?>">■<?php echo include_component('common', 'datetimestr', array('datetime'=>$topic->getCreatedAt(), 'timeflg'=>true)) ?><br />
    <?php echo $topic->getTitle() ?></a></li>
  <?php endforeach; ?>
</ul>

</div>