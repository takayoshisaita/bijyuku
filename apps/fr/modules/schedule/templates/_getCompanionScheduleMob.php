<div id="companion_schedule" class="clearfix">
  <table style="border-collapse:collapse; margin:0 auto; font-size:x-small;">
  <?php foreach($Schedules as $Schedule): ?>
    <tr>
    <td class="date" style="border: 1px solid #666666;background-color:#FFFFFF;padding:2px;"><?php echo date("m/d", strtotime($Schedule['date'])) ?><?php echo "(".$weekArray[date("w", strtotime($Schedule['date']))].")" ?></td>
    <td class="time" style="border: 1px solid #666666;background-color:#FFFFFF;padding:2px;">
      <?php if($Schedule['intime']==''): ?>
休み
      <?php else: ?>
        <?php echo date("G:i", strtotime($Schedule['intime'])) ?>～
        <?php echo date("G:i", strtotime($Schedule['outtime'])) ?>
      <?php endif; ?>
    </td>
    </tr>
  <?php endforeach; ?>
  </table>
</div>
