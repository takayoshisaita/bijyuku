<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
<link rel="stylesheet" href="/js/tiny_mce/themes/advanced/skins/default/ui.css">
<link rel="stylesheet" href="/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/window.css">
    <?php use_javascript('jquery-1.4.2.min.js') ?>
    <?php use_javascript('smoothScroll.js') ?>
    <?php echo tag('link', array('rel' => 'shortcut icon', 'href' => _compute_public_path('favicon', 'images', 'ico', false))) . PHP_EOL ?>
  </head>
  <body>
  <div id="admin">

<div id="id">
<div id="login_bar">
<?php if ($sf_user->isAuthenticated()): ?>
ログインユーザー： <?php echo $sf_user->getUsername() ?>&nbsp;&nbsp;<?php echo link_to('ログアウト', '@sf_guard_signout') ?></a>
<?php else: ?>
ログインしていません。&nbsp;&nbsp;<?php echo link_to('ログイン', '@sf_guard_signin') ?>
<?php endif?>
&nbsp;|&nbsp;<a href="<?php echo url_for('shop/index') ?>">管理画面TOP</a>
</div>

  <div id="content_header">
    <div id="header_title">
      <?php echo link_to(image_tag('common/logo_main_trans.gif'), url_for('index/index')) ?>
    </div>
  </div>

  <div id="content_main">
    <div id="content" class="clearfix">
      <?php echo $sf_content ?>
    </div>
  </div>

  <a href="<?php echo url_for('shop/index') ?>">管理画面TOP</a>

  <?php include_javascripts() ?>

  </div>

  </div>
    <?php include_javascripts() ?>
  </body>
</html>
