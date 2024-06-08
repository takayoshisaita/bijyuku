    <div class="box clearfix">
      <a href="javascript:window.open('<?php echo url_for("companion/show?id=".$schedule['compid'], false)?>','windowname','width=600px,height=360px','menubar=no,toolbar=no,scroll=yes');void(0);">
      <?php echo image_tag('/uploads/companion/'.$schedule['comppic1'], array('width'=>'100px', 'class'=>'left')) ?>
      </a>
      <?php echo image_tag('/uploads/rank/'.$schedule['rankpic'], array('width'=>'100px')) ?><br />
      <?php echo $schedule['compname'] ?><br />
      <?php echo date("G:i", strtotime($companion->getIntime())) ?>〜 <?php echo date("G:i", strtotime($companion->getOuttime())) ?><br />
      <div class="timeup">
      【ご案内可能時刻】
      </div>
      <span style="font-weight:bold;"><?php echo $companion->getTimeupStr() ?></span>
      <br />
      <div class="icons clearfix left">
        <?php include_component('companion', 'geticons', array('cid' => $schedule['compid'])) ?>
      </div>
    </div>
