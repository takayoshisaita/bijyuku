<div id="schedulewidget" class="clearfix">
<?php if($Shop_id == 1): ?>
<?php echo image_tag('/images/top/wait_title2.gif') ?>
<?php elseif($Shop_id == 4): ?>
<?php echo image_tag('/images/top/wait_title_ms.gif') ?>
<?php else: ?>
<?php echo image_tag('/images/top/wait_title.gif') ?>
<?php endif; ?>
  <div id="schebox">
  <?php foreach($Schedules as $Schedule): ?>
    <div class="comps clearfix">
    <a href="javascript:window.open('<?php echo url_for($Route."?module=companion&action=popup&id=".$Schedule['cid'], false)?>','windowname','width=<?if($Schedule['item8']): ?>902px<?else: ?>606px<?endif; ?>,height=629px,menubar=no,toolbar=no');void(0);">
    <!--
      <?php echo image_tag('/uploads/companion/thumb/'.$Schedule['pic1'], array('width'=>'70px', 'class'=>'pic')) ?>
     -->
      <?php echo image_tag('/uploads/companion/'.$Schedule['pic1'], array('width'=>'70px', 'class'=>'pic')) ?>
    </a>
    <div class="rank">
<!--
      <?php echo image_tag('/uploads/rank/'.$Schedule['rankpic'], array('width'=>'70px')) ?>
-->
    </div>
    <p>
    <span style="font-size:14px; font-weight:bold;"><?php echo $Schedule['name'] ?></span><span style="font-size:14px"><?php echo '('.$Schedule['age'].')' ?></span><br />
    T<?php echo $Schedule['t'] ?>&nbsp;B<?php echo $Schedule['b'] ?>(<?php echo $Schedule['cup'] ?>)&nbsp;W<?php echo $Schedule['w'] ?>&nbsp;H<?php echo $Schedule['h'] ?>
    <br />
    <?php if($Shop_id != 1): ?>
    <div class="worktime">
    【本日の出勤】<br />
    <?php echo CompanionTable::getWorktimestrFromCid($Schedule['cid']) ?>
    </div>
    <?php endif; ?>
    <div class="timeup">
    <?php if($Shop_id != 1): ?>
    【ご案内可能時刻】<br />
    <span style="font-weight:bold;"><?php echo CompanionTable::getTimeupStrFromCid($Schedule['cid']) ?></span>
    <?php else : ?>
    【本日の出勤】<br />
    <span style="font-weight:bold;"><?php echo CompanionTable::getWorktimestrFromCid($Schedule['cid']) ?></span>
    <?php endif; ?>
    </div>
    </p>
    <?php include_component('companion', 'geticons', array('cid' => $Schedule['cid'])) ?>
    </div>
  <?php endforeach; ?>
  </div>
</div>
