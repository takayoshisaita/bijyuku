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
    <div id="login_bar">
    <?php if ($sf_user->isAuthenticated()): ?>
ログインユーザー： <?php echo $sf_user->getUsername() ?>&nbsp;&nbsp;<?php echo link_to('ログアウト', '@sf_guard_signout') ?></a>
    <?php else: ?>
ログインしていません。&nbsp;&nbsp;<?php echo link_to('ログイン', '@sf_guard_signin') ?>
    <?php endif?>
    </div>

    <?php echo $sf_content ?>
  </body>
</html>
