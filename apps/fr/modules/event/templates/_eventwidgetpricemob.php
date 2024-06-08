<div id="eventwidgetprice">
  <div id="container">
    <div id="thumbs" class="navigation" style="width:220px; text-align:center; margin: 0 auto;">
      <ul class="thumbs noscript" style="list-style-type:none;">
        <?php foreach($Events as $k => $v): ?>
          <li>
            <a class="thumb" name="leaf" href="<?php echo url_for($Route.'?module=event&action=index&id='.$v['id']) ?>" title="Title #0">
              <img src="<?php echo '/uploads/event/thumb/'.$v['pic'] ?>" alt="Title #0" style="width:220px; height:110px;"/>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div style="clear: both;"></div>
    <div id="controls" class="controls"></div>
  </div>
</div>
