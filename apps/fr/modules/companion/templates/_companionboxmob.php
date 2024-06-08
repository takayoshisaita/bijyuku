<div class="box clearfix" style="background-color:#0f186a; border: 1px solid #6D574E; color:#fff; width:212px; height:80%; padding:4px; margin:4px auto; text-align:left; clear:both;">
  <?php echo link_to(image_tag('/uploads/companion/thumb/'.$companion->getPic1(), array('class'=>'pic', 'style'=>'width:80px; float:left; margin-right:4px;')), url_for($Route.'?module=companion&action=show&id='.$companion->getId())) ?>
<!--
  <?php echo image_tag('/uploads/rank/'.$companion['rankpic'], array('width'=>'60px', 'class'=>'rankpic')) ?><br />
-->
  <span style="font-size:small;"><?php echo $companion->getName() ?>(<?php echo $companion->getAge() ?>)</span><br />
  <?php echo $companion->getT() ?>/<?php echo $companion->getB() ?>(<?php echo $companion->getCup() ?>)/<?php echo $companion->getW() ?>/<?php echo $companion->getH() ?><br />
  <?php echo $companion->getOnelinecomment() ?><br />
  <div>
【ﾚｷﾞｭﾗｰ出勤予定】<br />
    <?php echo date("G:i", strtotime($companion->getIntime())) ?>〜 <?php echo date("G:i", strtotime($companion->getOuttime())) ?><br />
    <?php if($Shop_id != 2): ?>
【本日ご案内可能時刻】<br />
      <span style="font-weight:bold;"><?php echo $companion->getTimeupStr() ?></span>
    <?php else: ?>
【本日の出勤時刻】<br />
      <span style="font-weight:bold;"><?php echo $companion->getWorktimeStr() ?></span>
    <?php endif; ?>
    <br />
    <?php if($companion->getIntimeToday() != "-" && $companion->getIntimeToday() != null): ?>
      <?php echo image_tag('/images/common/icon_atwork.gif', array('class'=>'icon')) ?>
    <?php endif; ?>
    <?php include_component('companion', 'geticons', array('cid' => $companion->getId())) ?>
  </div>
  <div style="clear:both;"></div>
</div>
