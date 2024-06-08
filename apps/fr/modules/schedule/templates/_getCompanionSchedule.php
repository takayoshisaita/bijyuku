<div id="companion_schedule" class="clearfix">
  <?php foreach($Schedules as $Schedule): ?>
  <div class="schebox">
    <div class="date"><?php echo date("m/d", strtotime($Schedule['date'])) ?></div>
    <div class="time">
      <?php if($Schedule['intime']==''): ?>
休み
      <?php else: ?>
        <?php echo date("G:i", strtotime($Schedule['intime'])) ?><br />
        <?php echo date("G:i", strtotime($Schedule['outtime'])) ?>
      <?php endif; ?>
    </div>
  </div>
  <?php endforeach; ?>
</div>
