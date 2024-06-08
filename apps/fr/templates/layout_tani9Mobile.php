<?php include_partial('jpmobile/dtd') ?>
<?php
  // Copyright 2010 Google Inc. All Rights Reserved.

  $GA_ACCOUNT = "UA-49489490-1";
  $GA_PIXEL = "/ga.php";

  function googleAnalyticsGetImageUrl() {
    global $GA_ACCOUNT, $GA_PIXEL;
    $url = "";
    $url .= $GA_PIXEL . "?";
    $url .= "utmac=" . $GA_ACCOUNT;
    $url .= "&utmn=" . rand(0, 0x7fffffff);
    $referer = $_SERVER["HTTP_REFERER"];
    $query = $_SERVER["QUERY_STRING"];
    $path = $_SERVER["REQUEST_URI"];
    if (empty($referer)) {
      $referer = "-";
    }
    $url .= "&utmr=" . urlencode($referer);
    if (!empty($path)) {
      $url .= "&utmp=" . urlencode($path);
    }
    $url .= "&guid=ON";
    return str_replace("&", "&amp;", $url);
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php echo tag('link', array('rel' => 'shortcut icon', 'href' => _compute_public_path('favicon', 'images', 'ico', false))) . PHP_EOL ?>
  </head>

  <body>
  <div class="mobile" style="text-align:center;font-size:x-small;background-color:#EAE8E8;line-height:1.5em;">

  <div id="content_header" style="color: #FFE8A9; background-color: #111874;">
    <div id="header_caption" style="line-height:1em;font-size:xx-small;color:#FF00FF;"><marquee>四十路の艶やかな美貌と裸体…艶姿がエロすぎる痴魔女な奥さん･･･大阪 熟女エステ ”美熟で痴的なご奉仕奥さん”</marquee></div>
    <div id="header_title" style="background-image: url(/images/layout/m/header_bk.gif);">
      <div style="font-size:xx-small; text-align:center;">
        <a href="<?php echo url_for('@default?module=top&action=index') ?>">
        <div style="background-image: url(/images/layout/m/logo.gif);background-repeat: no-repeat;background-position: 50% 0;height:88px;"></div>
        </a>

        <a href="tel:06-6776-8448" style="font-size:x-small; color:#FFE8A9;">06-6776-8448</a><br />
[営業時間]11:00 - LAST<br />
      </div>
  <div id="switch">
    <div class="switch_btn">
      <?php echo link_to('>>求人のご案内', 'http://work.bijyuku.com/', array('style' => 'color: #FFFFFF;')) ?>
    </div>
  </div>
    </div>
  </div>
  <hr color="#666666;" size="1" />

  <div id="content_main" style="background-image:url(/images/layout/m/content_bk.gif);">
    <div id="content" class="clearfix">
      <?php echo $sf_content ?>
    </div>
  </div>

  <hr color="#666666;" size="1" />
  <?php echo include_component_slot('menu_mob') ?>
  <hr color="#666666;" size="1" />
  <div id="footer_navi" style="line-height:1em;text-align:center;">
    <ul>
      <li style="list-style:none;"><a href="#content_header">[▲]ﾍﾟｰｼﾞ先頭へ</a></li>
      <li style="list-style:none;"><?php echo link_to('&lt;前のﾍﾟｰｼﾞに戻る', $sf_request->getReferer() ? $sf_request->getReferer() : url_for('@default?module=top&action=index', true)) ?></li>
      <li style="list-style:none;"><?php echo link_to('&lt;&lt;ｻｲﾄTOP(ﾒﾆｭｰ)に戻る', url_for('@default?module=top&action=index', true)) ?></li>
    </ul>
  </div>

  <div id="footer_link" style="line-height:1em;text-align:center;">
<!--
    <?php echo link_to('ｵﾌｨｼｬﾙﾌﾞﾛｸﾞ', 'http://www.bijyuku.com/blog/') ?><br />
-->
    <br clear="all"/>
    <hr color="#666666;" size="1" />
- 四十路の艶やかな美貌と裸体…艶姿がエロすぎる痴魔女な奥さん -<br />美熟で痴的なご奉仕奥さん<br />
        <a href="tel:06-6776-8448">06-6776-8448</a><br />
[営業時間]11:00 - LAST<br />
&copy;bijyuku.com <?php echo date("Y") ?><br />
        <a href="mailto:info@bijyuku.com">info@bijyuku.com</a><br />
    <div><?php echo link_to('お問い合わせ', url_for('@default?module=inquiry&action=new&tid=3'), array('class'=>'link')) ?>&nbsp;|&nbsp;<?php echo link_to('求人案内', 'http://work.bijyuku.com/') ?></div>
  </div>

  </div><!-- /.mobile -->
<?php
  $googleAnalyticsImageUrl = googleAnalyticsGetImageUrl();
  echo '<img src="' . $googleAnalyticsImageUrl . '" alt="bijyuku.com" style="position:absolute; left:-999px; />';
?>
  </body>
</html>
