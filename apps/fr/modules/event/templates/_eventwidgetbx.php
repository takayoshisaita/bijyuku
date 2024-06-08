<div id="eventwidget">

  <div id="container" class="clearfix">
    <ul class="bxslider">
      <?php foreach($Events as $k => $v): ?>
      <li>
      <a name="leaf" href="<?php echo url_for($Route.'?module=event&action=index&id='.$v['id']) ?>" title="Title #0">
        <img src="<?php echo '/uploads/event/'.$v['pic'] ?>" alt="Title #0" />
        <span id="project-path" style="display:none;"><?php echo url_for($Route.'?module=event&action=index&id='.$v['id']) ?></span>
      </a>
      </li>
      <?php endforeach; ?>
    </ul>
    <div id="det">▲画像クリックで詳細が見れます</div>
  </div>
  <div id="bx-pager">
    <div class="bx-pager-inner">
    <?php foreach($Events as $k => $v): ?>
      <a data-slide-index="<?php echo $k ?>" href=""><img src="<?php echo '/uploads/event/thumb/'.$v['pic'] ?>" /></a>
    <?php endforeach; ?>
    </div>
  </div>

</div>
<br clear="all" />
<script type="text/javascript">
$(document).ready(function(){
	  $('.bxslider').bxSlider({
		  pagerCustom: '#bx-pager',
			auto:true,
			autoControls: true,
      speed:1000
	  });
	});
</script>
