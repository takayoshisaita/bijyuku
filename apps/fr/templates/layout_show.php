<?php include_partial('jpmobile/dtd') ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <link rel="stylesheet" href="/js/galleriffic/css/basic.css" type="text/css" />
    <link rel="stylesheet" href="/js/galleriffic/css/galleriffic-2.css" type="text/css" />
    <script type="text/javascript" src="/js/galleriffic/js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="/js/galleriffic/js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="/js/galleriffic/js/jquery.opacityrollover.js"></script>
    <!-- We only want the thunbnails to display when javascript is disabled -->
    <script type="text/javascript">
<!--
      document.write('<style>.noscript { display: none; }</style>');
-->
    </script>
    <script type="text/javascript" src="http://bijyuku.com/ra/script.php"></script>
    <noscript>
      <p>
        <img src="http://bijyuku.com/ra/track.php" alt="" width="1" height="1" />
      </p>
    </noscript>
  </head>
  <body>
    <div id="back" class="clearfix">
      <div id="base_show">
      <?php echo $sf_content ?>
      </div>
    </div>
  </body>
</html>
