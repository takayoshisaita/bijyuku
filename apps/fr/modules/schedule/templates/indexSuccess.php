<div id="schedules">
<div class="title">
  <h1>◆◇出勤情報◇◆</h1>
</div>

<div id="daysbox" class="clearfix">
<div class="<?php echo $day0 ?>">
<?php echo link_to($Today."の予定", url_for($Route.'?module=schedule&action=index'), array('class'=>'days clearfix')) ?>
</div>
<div class="<?php echo $day1 ?>">
<?php echo link_to($Nextday."の予定", url_for($Route.'?module=schedule&action=index&day=1'), array('class'=>'days clearfix')) ?>
</div>
<div class="<?php echo $day2 ?>">
<?php echo link_to($Secondday."の予定", url_for($Route.'?module=schedule&action=index&day=2'), array('class'=>'days clearfix')) ?>
</div>
</div>

  <h2>▼午前の部(OPEN～12:00)▼</h2>
  <div class="boxframe clearfix">
    <?php foreach ($Schedules0 as $schedule): ?>
      <?php echo include_partial('companion/companionschebox', array('schedule'=>$schedule, 'day0'=>$day0, 'Route'=>$Route, 'Shop_id'=>$Shop_id)) ?>
    <?php endforeach; ?>
  </div>

  <h2>▼午後の部(12:00～18:00)▼</h2>
  <div class="boxframe clearfix">
    <?php foreach ($Schedules1 as $schedule): ?>
      <?php echo include_partial('companion/companionschebox', array('schedule'=>$schedule, 'day0'=>$day0, 'Route'=>$Route, 'Shop_id'=>$Shop_id)) ?>
    <?php endforeach; ?>
  </div>

  <h2>▼夜の部(18:00～LAST)▼</h2>
  <div class="boxframe clearfix">
    <?php foreach ($Schedules2 as $schedule): ?>
      <?php echo include_partial('companion/companionschebox', array('schedule'=>$schedule, 'day0'=>$day0, 'Route'=>$Route, 'Shop_id'=>$Shop_id)) ?>
    <?php endforeach; ?>
  </div>
</div>
