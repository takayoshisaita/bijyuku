<div id="companions">
  <div id="boxframe" class="clearfix">
  <div class="title">
    <h1>◆◇女性紹介◇◆</h1>
    <div id="ranksamplebox">
    <?php foreach ($Rankpics as $Rankpic): ?>
<!--
      <?php echo image_tag('/uploads/rank/'.$Rankpic->getPic(), array('class'=>'ranksample')) ?>
-->
    <?php endforeach; ?>
    </div>
  </div>
    <?php foreach ($companions as $companion): ?>
      <?php echo include_partial('companion/companionbox', array('companion'=>$companion, 'Route'=>$Route, 'Shop_id'=>$Shop_id)) ?>
    <?php endforeach; ?>
  </div>
</div>
