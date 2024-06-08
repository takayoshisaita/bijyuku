<div class="box clearfix" style="background-color:<? if($Shop_id == 4): ?>#F0F0F0<? else: ?>#728BD3<? endif; ?>; border: 1px solid #6D574E; color:#000000; width:212px; height:60%; padding:4px; margin:0 auto 4px; font-size:1em; text-align:left; clear:both;">
  <?php echo link_to(image_tag('/uploads/companion/thumb/'.$schedule->getCompanion()->getPic1(), array('class'=>'pic', 'style'=>'width:80px; float:left; margin-right:4px;', 'alt'=> $schedule->getCompanion()->getName())), url_for($Route."?module=companion&action=show&id=".$schedule->getCompanion()->getId())) ?>
  <div style="float:left; width:128px;" class="clearfix">
<!--
    <?php echo image_tag('/uploads/rank/'.$schedule['rankpic'], array('width'=>'80px')) ?><br />
-->

    <span style="font-size:small;"><?php echo $schedule->getCompanion()->getName() ?>(<?php echo $schedule->getCompanion()->getAge() ?>)</span><br />
    <?php echo $schedule->getCompanion()->getT() ?>/<?php echo $schedule->getCompanion()->getB() ?>(<?php echo $schedule->getCompanion()->getCup() ?>)/<?php echo $schedule->getCompanion()->getW() ?>/<?php echo $schedule->getCompanion()->getH() ?><br />
    <?php echo $schedule->getCompanion()->getOnelinecomment() ?><br />

【出勤時間】<br />
    <?php echo date("G:i", strtotime($schedule->getIntime())) ?>〜 <?php echo date("G:i", strtotime($schedule->getOuttime())) ?><br/>
    <?php if($Shop_id != 2): ?>
      <span style="letter-spacing:-0.1em;">【ご案内可能時刻】</span><br />
      <span style="font-weight:bold;"><?php echo CompanionTable::getTimeupStrFromCid($schedule->getCompanion()->getId()) ?></span>
      <br />
    <?php endif; ?>
    <?php include_component('companion', 'geticons', array('cid' => $schedule->getCompanion()->getId())) ?>
  </div>
  <div style="clear:both;"></div>
</div>
