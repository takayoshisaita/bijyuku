<h1>◆◇出勤情報◇◆</h1>

<div id="schedules">

<div id="daysbox" class="clearfix" style="width:220px; margin:0 auto;">
<?php echo link_to($Today."の予定", url_for($Route.'?module=schedule&action=index'), array('class'=>'days', 'style'=>'display:block; border:1px solid #6D574E; background-color:#728BD3; color:#000000; width:6em; float:left; padding:2px; margin-right:2px;')) ?>
<?php echo link_to($Nextday."の予定", url_for($Route.'?module=schedule&action=index&day=1'), array('class'=>'days', 'style'=>'display:block; border:1px solid #6D574E; background-color:#728BD3; color:#000000; width:6em; float:left; padding:2px; margin-right:2px;')) ?>
<?php echo link_to($Secondday."の予定", url_for($Route.'?module=schedule&action=index&day=2'), array('class'=>'days', 'style'=>'display:block; border:1px solid #6D574E; background-color:#728BD3; color:#000000; width:6em; padding:2px; float:left;')) ?>
</div>
<br clear="all" />

<h2 style="
    background-image: url(/images/common/title_bk2.gif);
    background-repeat: repeat-x;
    color: #ffffff;
    font-weight: bold;
    height: 30px;
    margin-top: 0;
    padding-left: 10px;
    padding-top: 6px;
    font-size:larger;">▼<?php echo $Today_njw ?>の予定▼</h2>
  <hr size="1" color="#FFFFFF" />
  <div class="boxframe clearfix">
    <?php foreach ($SchedulesM as $schedule): ?>
      <?php echo include_partial('companion/companionscheboxmob', array('schedule'=>$schedule, 'Route'=>$Route, 'Shop_id'=>$Shop_id)) ?>
      <hr size="1" color="#FFFFFF" />
    <?php endforeach; ?>
  </div>

</div>
