<h1 style="font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
◆◇イベント情報◇◆
</h1>
<div id="topics">

<ul>
  <?php foreach ($Events as $Event): ?>
    <li style="border-bottom: 1px dotted #999999;text-align:left;"><?php echo link_to($Event->getTitle(), url_for($Route.'?module=event&action=show&id='.$Event->getId())) ?></li>
  <?php endforeach; ?>
</ul>

</div>