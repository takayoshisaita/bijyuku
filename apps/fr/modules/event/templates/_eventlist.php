<div class="eventbox clearfix">

<h2>
  <?php echo $Event['title'] ?>
</h2>
<div class="pic">
  <?php echo image_tag('/uploads/event/'.$Event['pic']) ?>
</div>
<div class="comment">
  <?php echo $Event->getComment(ESC_RAW) ?>
</div>

</div>
