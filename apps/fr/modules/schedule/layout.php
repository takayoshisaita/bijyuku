<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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
      document.write('<style>.noscript { display: none; }</style>');
    </script>
  </head>
  <body>
    <?php echo include_component_slot('menu') ?>
    <?php echo $sf_content ?>
  </body>
</html>
