<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
<?php echo link_to(image_tag('/images/layout/m/logo_s.gif'), url_for('http://www.bijyuku.com/top'), array('target'=>'_blank', 'style'=>'margin-right:5px;')) ?>
<?php if ($sf_user->isAuthenticated()): ?>
ログインユーザー： <?php echo $sf_user->getUsername() ?>&nbsp;&nbsp;<?php echo link_to('ログアウト', '@sf_guard_signout') ?>
    <?php else: ?>
ログインしてくらさい　┏(＿ ＿)┓
    <?php endif?>

    <?php if ($sf_user->hasCredential('admin')): ?>
      <div id="adminmenu">
        <ul>
        <li style="display:inline;"><?php echo link_to('ユーザー管理', 'sf_guard_user') ?></li>
        <li style="display:inline;"><?php echo link_to('ユーザーグループ管理', 'sf_guard_group') ?></li>
        <li style="display:inline;"><?php echo link_to('ユーザー権限管理', 'sf_guard_permission') ?></li>
        </ul>
      </div>

      <div id="menu">
        <ul>
          <li><?php echo link_to('店舗詳細', 'shop') ?></li>
          <li><?php echo link_to('料金表', 'price') ?></li>
          <li><?php echo link_to('料金表カテゴリー', 'price_category') ?></li>
          <li><?php echo link_to('お知らせ', 'info') ?></li>
          <li><?php echo link_to('トピック', 'topic') ?></li>
          <li><?php echo link_to('トピックカテゴリー', 'topic_category') ?></li>
          <li><?php echo link_to('イベント', 'event') ?></li>
          <li><?php echo link_to('メルマガ', 'https://exp-t.jp/e/magazine/index/', array('target'=>'_blank')) ?></li>
          <li><?php echo link_to('コンパニオン', 'companion') ?></li>
          <li><?php echo link_to('出勤表(本店)', url_for('comp_sche/index?shop_id=1')) ?></li>
          <li><?php echo link_to('出勤表管理', 'schedule') ?></li>
          <li><?php echo link_to('お問い合わせ', 'inquiry') ?></li>
          <li><?php echo link_to('MAP一覧', 'map') ?></li>
          <li><?php echo link_to('コンパニオンランク', 'rank') ?></li>
          <li><?php echo link_to('コンパニオン用アイコン', 'icon') ?></li>
          <li><?php echo link_to('相互リンク', 'link_banner') ?></li>
        </ul>
      </div>
    <?php endif?>

  </body>
</html>
