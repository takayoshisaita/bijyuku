<div id="event">
  <div class="title">
    <h1>◆◇イベントのご案内◇◆</h1>
  </div>

  <?php echo include_component('event', 'eventwidgetprice') ?>

  <?php foreach($Events as $Event): ?>
    <?php echo include_partial('eventlist', array('Event'=>$Event)) ?>
  <?php endforeach; ?>
</div>

