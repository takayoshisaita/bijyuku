<div id="companion_detail">
  <h1 style="font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
女性詳細</h1>
  <hr size="1" color="#666666"/>
  <marquee><?php echo $Companion['onelinecomment'] ?></marquee>
  <h2 style="font-size:small;"><?php echo $Companion['name'] ?>(<?php echo $Companion['age'] ?>)</h2>
  <div id="picbox">
<!--
  <?php echo image_tag('/uploads/rank/'.$Companion['rankpic'], array('width'=>'80px', 'class'=>'rankpic')) ?>
-->
    <div id="pic">
      <?php echo link_to(image_tag('/uploads/companion/thumb/'.$Companion['pic'.$Picno], array('width'=>'120px', 'class'=>'pic', 'id'=>'pic1')), '/uploads/companion/'.$Companion['pic'.$Picno]) ?>
    </div>
    <ul>
      <?php foreach($Picnums as $k => $v): ?>
      <li style="display:inline;"><?php echo link_to(strval($k+1), url_for($Route.'?module=companion&action=show&id='.$Companion['id'].'&pic='.$v)) ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div id="detail">
  T<?php echo $Companion['t'] ?>&nbsp;B<?php echo $Companion['b'] ?>(<?php echo $Companion['cup'] ?>)&nbsp;W<?php echo $Companion['w'] ?>&nbsp;H<?php echo $Companion['h'] ?><br />
  <?php include_component('companion', 'geticons', array('cid' => $Companion['id'])) ?><br />
  <?php echo $Companion['onelinecomment'] ?><br />
《本人コメント》<br />
  <?php echo $Companion['comment'] ?><br clear="all" /><br />
《店舗コメント》<br />
  <?php echo $Companion['shopcomment'] ?><br clear="all" /><br />
《レギュラー出勤時刻》<br />
  <?php echo date("G:i", strtotime($Companion['intime'])) ?>〜 <?php echo date("G:i", strtotime($Companion['outtime'])) ?><br />
<?php if($Companion['shop_id'] != 2): ?>
《本日ご案内可能時刻》<br />
  <span style="font-weight:bold;"><?php echo $Companion->getTimeupStr() ?></span>
  <br />
<?php else: ?>
《本日の出勤時刻》<br />
  <span style="font-weight:bold;"><?php echo $Companion->getWorktimeStr() ?></span>
  <br />
<?php endif; ?>
《出勤予定》<br />
  <?php include_component('schedule', 'getCompanionScheduleMob', array('cid' => $Companion['id'], 'weekArray'=>$weekArray)) ?>
  </div>
</div>
<br clear="all" />
