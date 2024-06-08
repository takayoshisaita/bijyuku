<div class="box clearfix">
<!--
  <?php echo image_tag('/uploads/rank/'.$companion['rankpic'], array('width'=>'120px', 'class'=>'rankpic')) ?>
-->
  <a href="javascript:window.open('<?php echo url_for($Route."?module=companion&action=popup&id=".$companion->getId(), false)?>','windowname','width=<?php if($companion->getItem8()): ?>902px<?php else: ?>606px<?php endif; ?>,height=629px,scrollbars=yes','menubar=no,toolbar=no');void(0);">
  <div class="picframe">
  <?php echo image_tag('/uploads/companion/'.$companion->getPic1(), array('class'=>'pic')) ?><br clear="all" />
  </div>
  </a>
  <div class="name">
    <?php echo $companion->getName() ?>(<?php echo $companion->getAge() ?>)<br clear="all" />
    <span style="font-size:12px;">T<?php echo $companion->getT() ?>&nbsp;B<?php echo $companion->getB() ?>(<?php echo $companion->getCup() ?>)&nbsp;W<?php echo $companion->getW() ?>&nbsp;H<?php echo $companion->getH() ?></span><br clear="all" />
  </div>
【レギュラー出勤時刻】
  <?php echo date("G:i", strtotime($companion->getIntime())) ?>〜 <?php echo date("G:i", strtotime($companion->getOuttime())) ?><br clear="all" />
<?php if($Shop_id != 1): ?>
【本日ご案内可能時刻】<br />
  <span style="font-weight:bold;"><?php echo $companion->getTimeupStr() ?></span>
<?php else: ?>
【本日の出勤時刻】<br />
  <span style="font-weight:bold;"><?php echo $companion->getWorktimeStr() ?></span>
<?php endif; ?>
  <div class="comment"><marquee><?php echo $companion->getOnelinecomment() ?></marquee></div>
  <?php if($companion->getIntimeToday() != "-" && $companion->getIntimeToday() != null): ?>
    <?php echo image_tag('/images/common/icon_atwork.gif', array('class'=>'icon')) ?>
  <?php endif; ?>
  <?php include_component('companion', 'geticons', array('cid' => $companion->getId())) ?>
</div>
