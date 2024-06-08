<h1>404エラー</h1>

<?php if ($sf_user->hasFlash('notice') || $sf_user->hasFlash('error')): ?>

<?php if ($sf_user->hasFlash('notice')): ?>
  <div class="flash_notice"><?php echo $sf_user->getFlash('notice') ?></div>
<?php endif; ?>

<?php if ($sf_user->hasFlash('error')): ?>
  <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif; ?>

<?php else: ?>
ページが見つかりません。
URLをご確認の上、しばらくたってから再度アクセスしてみてください。
<?php endif; ?>
