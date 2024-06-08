<script type="text/javascript">
function replace(k, v, dttm)
{
  var detailnode = document.getElementById('detail');
  var boxnode;
  for(var i=0; i<detailnode.childNodes.length; i++)
  {
    if(document.getElementById('box' + i))
    {
      boxnode = document.getElementById('box' + i);
      boxnode.style.display = 'none';
    }
  }
  boxnode = document.getElementById('box' + k);
  boxnode.style.display = '';

/*
  var detailnode = document.getElementById('detail');
  var dtnode = document.getElementById('dt');
  var ttlnode = document.getElementById('ttl');
  var cmtnode = document.getElementById('cmt');
  dtnode.parentNode.removeChild(dtnode);
  ttlnode.parentNode.removeChild(ttlnode);
  cmtnode.parentNode.removeChild(cmtnode);

  var dt = document.createElement('div');
  dt.id = "dt";
  dt.appendChild(document.createTextNode(dttm));

  var ttl = document.createElement('div');
  ttl.id = "ttl";
  ttl.appendChild(document.createTextNode(v['title']));
*/
}

</script>

<div id="topicwidget" class="clearfix">
  <?php if($Shop_id == 4): ?>
  <?php echo image_tag('/images/top/topic_title_ms.gif') ?>
  <?php else: ?>
  <?php echo image_tag('/images/top/topic_title.gif') ?>
  <?php endif; ?>
  <div id="title_list" class="left">
    <ul>
    <?php foreach($Topics as $k => $v): ?>
      <li class="clearfix">
        <div onclick="replace('<?php echo $k ?>', '<?php echo $v ?>', '<?php echo include_component('common', 'datetimestr', array('datetime'=>$v['created_at'], 'timeflg'=>true)) ?>')">
          <div class="datetime"><?php echo include_component('common', 'datetimestr', array('datetime'=>$v['created_at'], 'timeflg'=>true)) ?></div>
          <div class="topictitle"><?php echo $v['title'] ?></div>
        </div>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>
  <div id="detail" style="margin-left: 201px;">
    <?php foreach($Topics as $k => $v): ?>
    <div id="box<?php echo $k ?>" <?php if($k != 0): ?>style="display: none;"<?php endif; ?>>
      <div class="dt">
        <?php echo include_component('common', 'datetimestr', array('datetime'=>$v['created_at'], 'timeflg'=>true)) ?>
      </div>
      <div class="ttl"><?php echo $v['title'] ?></div>
      <div class="cmt">
<!--
        <?php if($v['pic']): ?>
          <?php echo image_tag('/uploads/topic/'.$v['pic']) ?>
        <?php endif; ?>
 -->
        <?php echo $v->getComment(ESC_RAW) ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
