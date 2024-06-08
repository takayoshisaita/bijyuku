<div id="play">
  <div class="title">
    <h1>◆◇お待ち合わせ場所・地図◇◆</h1>
  </div>


  <div id="map">
  <?php foreach ($Maps as $Map) : ?>
    <?php if ($Map) : ?>
      <div style="font-size: 16px; font-weight: bold;margin-bottom: 6px;">■<?php echo $Map
				->getName() ?></div>
				<pre><?php echo $Map->getComment(ESC_RAW) ?></pre>
			<?php if($Map->getSource() != null && $Map->getSource() != ''): ?>
			  <?php echo $Map->getSource(ESC_RAW) ?>
			<?php else: ?>
        <?php echo image_tag('/uploads/map/' . $Map->getPic(), array('class' => 'mapimg')) ?>
			<?php endif; ?>
      <br />
    <?php endif; ?>
  <?php endforeach; ?>
  </div>


  <?php if($Shop_id == 1): ?>
  <h2>梅田近隣駐車場マップ</h2>
  <div id="parkingmap">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="http://www.kaishun-do.com/js/parkingmap.js"></script>
  <div id="map_canvas" style="height:500px;">
  </div>

  <table class="table-style01">
    <tr>
      <th class="col1">駐車場名</th>
      <th class="col2">料金</th>
      <th class="col3">最大料金</th>
    </tr>
    <tr>
      <td><a href="javascript:map_click(0)">喜多野モータープール</a></td><td>■20分/100円(8時〜24時) 60分/100円(24時〜8時)</td><td>■6時間：1400円</td>
    </tr>
    <tr>
      <td><a href="javascript:map_click(1)">梅田第4パーキング</a></td><td>■30分/200円(8時〜23時)60分/100円(23時〜8時)</td><td>■12時間：1000円</td>
    </tr>
    <tr>
      <td><a href="javascript:map_click(2)">タイムズ兎我野第5</a></td><td>■30分/200円(6時〜18時) 60分/300円(18時〜6時)</td><td>■24時間 1200円</td>
    </tr>
    <tr>
      <td><a href="javascript:map_click(3)">タイムズ兎我野第4</a></td><td>■300円/30分(09:00-01:00) 60分/100円(01:00-09:00)</td><td>■6時間 900円</td>
    </tr>
    <tr>
      <td><a href="javascript:map_click(4)">タイムズ兎我野第7</a></td><td>■300円/30分(09:00-01:00) 60分/100円(01:00-09:00)</td><td>■6時間 900円</td>
    </tr>
    <tr>
      <td><a href="javascript:map_click(5)">タイムズ兎我野第9</a></td><td>■300円/30分(00:00-24:00)</td><td>■6時間 900円</td>
    </tr>
    <tr>
      <td><a href="javascript:map_click(6)">タイムズ ライフ太融寺店</a></td><td>■400円/60分(00:00-24:00)<br />ただし60分以降30分 200円</td><td>■当日最大2000円(24時迄)<br />ライフ太融寺店で500円以上お買物のお客様90分無料</td>
    </tr>
  </table>

  </div>
  <?php endif; ?>

</div>
