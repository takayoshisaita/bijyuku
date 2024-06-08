<div id="topics">

<ul style="list-style-type:none;padding: 0 6px;">
  <?php foreach ($Topics as $topic): ?>
    <li style="border-bottom: 1px dotted #999999;"><a href="<?php echo url_for($Route.'?module=topic&action=show&id='.$topic->getId()) ?>">■<?php echo include_component('common', 'datetimestr', array('datetime'=>$topic->getCreatedAt(), 'timeflg'=>true)) ?><br />
    <?php echo $topic->getTitle() ?></a></li>
  <?php endforeach; ?>
</ul>

</div>
