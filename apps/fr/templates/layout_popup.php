<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <?php include_stylesheets() ?>
    <style type="text/css">
    html {
      overflow: hidden;
    }
    </style>
    <?php include_javascripts() ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49489490-1', 'auto');
      ga('send', 'pageview');

    </script>
<script type="text/javascript">
function replace(v)
{
  var detailnode = document.getElementById('pics');
  var boxnode;
  for(var i=0; i<10; i++)
  {
    if(document.getElementById('pic' + (i+1)))
    {
      boxnode = document.getElementById('pic' + (i+1));
      boxnode.style.display = 'none';
    }
  }
  boxnode = document.getElementById('pic' + v);
  boxnode.style.display = '';
}
</script>

    <script type="text/javascript" src="/js/galleriffic/js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="/js/galleriffic/js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="/js/galleriffic/js/jquery.opacityrollover.js"></script>
    <script type="text/javascript" src="/js/ibox.2.2/ibox.js"></script>
    <script type="text/javascript">
    iBox.padding = 50;
    iBox.inherit_frames = false;
    </script>
    <?php echo tag('link', array('rel' => 'shortcut icon', 'href' => _compute_public_path('favicon', 'images', 'ico', false))) . PHP_EOL ?>
  </head>
  <body>
    <?php echo $sf_content ?>
  </body>
</html>
