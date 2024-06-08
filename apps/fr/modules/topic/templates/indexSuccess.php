<h1 style="font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
◆◇新着情報◇◆
</h1>
<div id="topics">

<ul>
  <?php foreach ($topics as $topic): ?>
    <li><a href="<?php echo url_for($Route.'?module=topic&action=edit&id='.$topic->getId()) ?>"><?php echo $topic->getCreatedAt() ?><?php echo $topic->getTitle() ?></a></li>
  <?php endforeach; ?>
</ul>

</div>