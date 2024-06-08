<div class="box clearfix">
  <a href="javascript:window.open('<?php echo url_for($Route."?module=companion&action=popup&id=".$schedule->getCompanion()->getId(), false)?>','windowname','width=<?php if($schedule->getCompanion()->getItem8()): ?>902px<?php else: ?>606px<?php endif; ?>,height=629px,scrollbars=yes','menubar=no,toolbar=no');void(0);">
  <?php echo image_tag('/uploads/companion/'.$schedule->getCompanion()->getPic1(), array('width'=>'100px', 'class'=>'left')) ?>
  </a>
<!--
  <?php echo image_tag('/uploads/rank/'.$schedule['rankpic'], array('width'=>'100px')) ?><br />
-->
  <div class="namebox">
  <span class="name"><?php echo $schedule->getCompanion()->getName() ?></span><span style="font-size:11px;"><?php echo "(".$schedule->getCompanion()->getAge().")" ?></span><br />
  <span class="spec">T<?php echo $schedule->getCompanion()->getT() ?>&nbsp;B<?php echo $schedule->getCompanion()->getB() ?>(<?php echo $schedule->getCompanion()->getCup() ?>)&nbsp;W<?php echo $schedule->getCompanion()->getW() ?>&nbsp;H<?php echo $schedule->getCompanion()->getH() ?></span>
  </div>
  <div class="timeup">
  【出勤時間】<br />
  <?php echo date("G:i", strtotime($schedule->getIntime())) ?>〜 <?php echo date("G:i", strtotime($schedule->getOuttime())) ?>
  </div>
  <?php if($day0=='current' && $Shop_id != 1): ?>
  <div class="timeup">
  <span style="font-size:11px;">【ご案内可能時刻】</span><br />
  <span style="font-weight:bold;"><?php echo CompanionTable::getTimeupStrFromCid($schedule->getCompanion()->getId()) ?></span>
  </div>
  <?php endif; ?>
  <br />
  <div class="icons clearfix left">
    <?php include_component('companion', 'geticons', array('cid' => $schedule->getCompanion()->getId())) ?>
  </div>
</div>
