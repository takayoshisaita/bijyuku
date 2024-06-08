<h2>メニュー</h2>
<ul>
  <li><a href="<?php echo url_for('shop/index') ?>">管理画面TOP</a></li>
  <li><a href="<?php echo url_for('comp_sche/index') ?>">出勤表編集</a></li>
  <li><a href="<?php echo url_for('topic/index') ?>">新着情報編集</a></li>
  <li><a href="<?php echo url_for('event/index') ?>">イベント編集</a></li>
  <li><a href="<?php echo url_for('companion/index') ?>">コンパニオン情報編集</a></li>
  <li><a href="<?php echo url_for('price/index') ?>">料金表編集</a></li>
  <li><a href="<?php echo url_for('shop/edit?id='.$shop->getId()) ?>">店舗基本情報編集</a></li>
</ul>
<br clear="all" />