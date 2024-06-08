    <?php foreach($Icons as $k => $v): ?>
      <?php echo image_tag('/uploads/icon/'.$v['Icon']['pic'], array('class'=>'icon')) ?>
    <?php endforeach; ?>
