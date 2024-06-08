<?php include_partial('jpmobile/dtd') ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <meta content="width=980" name="viewport">
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <link rel="stylesheet" href="/js/galleriffic/css/basic.css" type="text/css" />
    <link rel="stylesheet" href="/js/galleriffic/css/galleriffic-2.css" type="text/css" />
    <link rel="stylesheet" href="/js/jquery.bxslider/jquery.bxslider.css" type="text/css" />
    <link rel="stylesheet" href="/js/magnific-popup/magnific-popup.css" type="text/css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/galleriffic/js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="/js/galleriffic/js/jquery.opacityrollover.js"></script>
    <script type="text/javascript" src="/js/jquery.bxslider/jquery.bxslider.min.js"></script>
    <!-- We only want the thunbnails to display when javascript is disabled -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49489490-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script type="text/javascript">
    $(function() {
      $(".scroll").click(function(event){
        event.preventDefault();

        var url = this.href;
        var parts = url.split("#");
        var target = parts[1];

        var target_offset = $("#"+target).offset();
        var target_top = target_offset.top;

        $('html, body').animate({scrollTop:target_top}, 500);
      });
    });
    </script>
  </head>
  <body>
    <div id="header">
    <div id="header_inner" class="clearfix">

    <a href="<?php echo url_for('@tani9_default?module=top&action=index') ?>"><div id="header_logo"></div></a>

    <div id="desc">
      <span style="display:block; margin-bottom:4px; font-size:20px; color:#ff00ff;">四十路の艶やかな美貌と裸体…艶姿がエロすぎる痴魔女な奥さん</span>
      <a href="<?php echo url_for(
    '@tani9_default?module=top&action=index')
                              ?>" style="font-size:32px;text-decoration:none; color:#ff00ff;letter-spacing: -2px;">大阪 熟女エステ ”美熟で痴的なご奉仕奥さん”</a><br>
      <span><a style="font-size: 26px;" href="tel:06-6776-8448">☎：06-6776-8448</a></span><br>
      <span style="margin:0 19px 0 -15px;font-size: 22px;float:left;">【OPEN】11:00 - LAST</span>
      <!--
      <a id="credlink" href="https://pay.star-pay.jp/site/pc/shop.php?payc=1514" target="_blank">
        <img src="/images/common/credit1.gif" alt="クレジット決済対応">
      </a>
      -->
      <div class="switch">
        <?php echo link_to('>>求人のご案内',  url_for('http://work.bijyuku.com'), array('target'=>'_blank')) ?>
      </div>
      <div class="switch">
        <a href="<?php echo str_replace('http://www', 'http://sp', $sf_context->getRequest()->getUri()) ?>">
          >>スマホサイト
        </a>
      </div>

      </div>
      <?php echo include_component_slot('menu_tani9') ?>

      </div>
    </div>
    <div id="back" class="clearfix">
      <div id="base">
      <?php echo $sf_content ?>
      </div>
    </div>
    <div id="pagetop" style="display: block;">
      <a href="#header" class="scroll">▲</a>
    </div>
    <div id="footer">
<!--
<?php echo link_to('写メ日記', url_for('http://www.bijyuku.com/blog/'), array('target'=>'_blank')) ?>&nbsp;|&nbsp;
 -->
<?php echo link_to('TOP', url_for('@tani9_default?module=top&action=index')) ?>&nbsp;|&nbsp;
<?php echo link_to('プレイ内容', url_for('@tani9_default?module=play&action=index')) ?>&nbsp;|&nbsp;
<?php echo link_to('料金案内', url_for('@tani9_default?module=price&action=index')) ?>&nbsp;|&nbsp;
<?php echo link_to('女性案内', url_for('@tani9_default?module=companion&action=index')) ?>&nbsp;|&nbsp;
<?php echo link_to('遊び方・ご利用方法', url_for('@tani9_default?module=system&action=index')) ?>&nbsp;|&nbsp;
<?php echo link_to('出勤情報', url_for('@tani9_default?module=schedule&action=index')) ?>&nbsp;|&nbsp;
<?php echo link_to('メルマガ', url_for('https://bite-ex.com/mag/2764/8/'), array('target'=>'_blank')) ?>&nbsp;|&nbsp;
<!--
<?php echo link_to('女の子ブログ', url_for('http://blog.livedoor.jp/honoka0430/'), array('target'=>'_blank')) ?>&nbsp;|&nbsp;
-->
<?php echo link_to('相互リンク', url_for('@tani9_default?module=linkbanner&action=index')) ?>&nbsp;|&nbsp;
<?php echo link_to('求人案内', url_for('http://work.bijyuku.com'), array('target'=>'_blank')) ?>&nbsp;|&nbsp;
<?php echo link_to('お問い合わせ', url_for('@tani9_default?module=inquiry&action=new&tid=3')) ?>&nbsp;|&nbsp;
<a href="<?php echo str_replace('http://www', 'http://sp', $sf_context->getRequest()->getUri()) ?>">スマホ版</a>
<br />
<a href="tel:06-6776-8448" class="tel">TEL：06-6776-8448</a><br />
    Copyright &copy; <?php echo date("Y") ?> bijyuku.com All Rights Reserved.
    </div>
  </body>
</html>
