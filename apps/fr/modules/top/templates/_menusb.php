<div id="menu_bar_mob">

<div id="omisesagashi">
  <?php echo image_tag('common/menu_omisesagashimob.gif',array('alt'=>'お店探し>>>')) ?>
</div>


  <a href="<?php echo url_for('topic/index', true) ?>" directkey="1"<?php if($TopicPage): ?>　class="current"<?php endif; ?>>
    <h3><?php echo image_tag('/images/common/number/1.gif', array('alt'=>'1')) ?>新着情報</h3>
  </a>
  <form action="<?php echo url_for('topic/index') ?>" method="post">
  <select name="category" id="category">
    <option value="">全カテゴリー</option>
    <?php foreach ($TopicCategories as $TopicCategory): ?>
      <option value="<?php echo $TopicCategory->getId() ?>"><?php echo $TopicCategory->getName() ?></option>
    <?php endforeach; ?>
  </select>
  <input type="submit" class="submit button" name="genresubmit" value="検　索" />
  </form>

  <a href="<?php echo url_for('genre/index', false) ?>" directkey="2" class="left<?php if($GenrePage): ?> current<?php endif; ?>">
    <h3><?php echo image_tag('/images/common/number/2.gif', array('alt'=>'2')) ?>業種</h3>
  </a>
  <form action="<?php echo url_for('genre/index') ?>" method="post">
  <select name="id" id="id">
    <option value="">全業種</option>
    <?php foreach ($Genres as $Genre): ?>
      <option value="<?php echo $Genre->getId() ?>"><?php echo $Genre->getName() ?></option>
    <?php endforeach; ?>
  </select>
  <input type="submit" class="submit button" name="genresubmit" value="検　索" />
  </form>

  <a href="<?php echo url_for('area/index', false) ?>" directkey="3"<?php if($AreaPage): ?>　class="current"<?php endif; ?>>
    <h3><?php echo image_tag('/images/common/number/3.gif', array('alt'=>'3')) ?>待ち合わせエリア</h3>
  </a>
  <form action="<?php echo url_for('area/index', false) ?>" method="post">
  <select name="id" id="id">
    <option value="">全エリア</option>
    <?php foreach ($Areas as $Area): ?>
      <option value="<?php echo $Area->getId() ?>"><?php echo $Area->getName() ?></option>
    <?php endforeach; ?>
  </select>
  <input type="submit" class="submit button" name="areasubmit" value="検　索" />
  </form>

  <a href="<?php echo url_for('index/newshop', false) ?>" directkey="4"<?php if($NewshopPage): ?>　class="current"<?php endif; ?>>
    <h3><?php echo image_tag('/images/common/number/4.gif', array('alt'=>'4')) ?>新規オープンのお店</h3>
  </a>

  <?php include_component('companion', 'pickupgalmob') ?>

<!--
  <a href="<?php echo url_for('gmap/index', false) ?>" directkey="5"<?php if($GmapPage): ?>　class="current"<?php endif; ?>>
    <h3><?php echo image_tag('/images/common/number/5.gif', array('alt'=>'5')) ?>MAP</h3>
  </a>
  <form action="gmap/index" method="post">
    <select name="id" id="area_id">
    <option value="">全エリア</option>
    <?php foreach ($Areas as $Area): ?>
      <option value="<?php echo $Area->getId() ?>"><?php echo $Area->getName() ?></option>
    <?php endforeach; ?>
  </select>
  <input type="submit" class="submit button" name="areasubmit" value="検　索" />
  </form>
-->
</div>