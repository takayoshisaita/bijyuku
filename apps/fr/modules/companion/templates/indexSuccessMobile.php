<h1 style="font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
◆◇女性紹介◇◆
</h1>
<div id="companions">

  <?php echo include_partial('companion/companionspaginate', array('pager' => $pager, 'Route' => $Route)) ?>
  <hr size="1" color="#FFFFFF" />

  <div id="boxframe" style="width:222px;padding:0;margin:0 auto;" class="clearfix">
    <?php foreach ($Companions as $companion): ?>
      <?php echo include_partial('companion/companionboxmob', array('companion'=>$companion, 'Route' => $Route, 'Shop_id'=>$Shop_id)) ?>
      <hr size="1" color="#FFFFFF" />
    <?php endforeach; ?>
  </div>
  <br clear="all" />

  <?php echo include_partial('companion/companionspaginate', array('pager' => $pager, 'Route' => $Route)) ?>

</div>
<br clear="all" />
