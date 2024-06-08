<?php include_partial('jpmobile/dtd') ?>
<?php
  // Copyright 2009 Google Inc. All Rights Reserved.
  $GA_ACCOUNT = "MO-22065881-1";
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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php echo tag('link', array('rel' => 'shortcut icon', 'href' => _compute_public_path('favicon', 'images', 'ico', false))) . PHP_EOL ?>
  </head>

  <body>
  <div class="mobile" style="text-align:center;font-size:x-small;background-color:#E6E6E6;line-height:1.5em;">

  <div id="content_header">
    <div id="header_caption" style="line-height:1em;font-size:xx-small;color:#FF00FF;"><marquee>いつもありがとうございます･･･</marquee></div>
    <div id="header_title" style="background-image: url(/images/layout/m/header_bk.gif);">
      <?php echo link_to(image_tag('common/logo_main_trans.gif', array('width'=>'120px;')), url_for('/top/index')) ?>
      <div style="font-size:xx-small; text-align:center;">
        <?php echo link_to(image_tag('/images/layout/m/kaishun-logo.gif', array('alt'=>'美熟な奥さんロゴ')), url_for('/top/index')) ?><br clear="all" />
- 待合せ型人妻ﾎﾃﾙｴｽﾃ -<br />美熟な奥さん<br />
        <a href="tel:06-6130-8535">06-6130-8535</a><br />
[営業時間]10:00 - 22:00<br />
        <a href="mailto:info@bijyuku.com">info@bijyuku.com</a>
      </div>
    </div>
  </div>
  <hr color="#666666;" size="1" />

  <div id="content_main" style="background-image:url(/images/layout/m/content_bk.gif);">
    <div id="content">
      <?php echo $sf_content ?>
    </div>
  </div>

  <hr color="#666666;" size="1" />
  <?php echo include_component_slot('menu_mob') ?>
  <hr color="#666666;" size="1" />
  <div id="footer_navi" style="line-height:1em;text-align:center;">
    <ul>
      <li style="list-style:none;"><a href="#content_header">[▲]ﾍﾟｰｼﾞ先頭へ</a></li>
      <li style="list-style:none;"><?php echo link_to('&lt;前のﾍﾟｰｼﾞに戻る', $sf_request->getReferer() ? $sf_request->getReferer() : url_for('top/index', true)) ?></li>
      <li style="list-style:none;"><?php echo link_to('&lt;&lt;ｻｲﾄTOP(ﾒﾆｭｰ)に戻る', url_for('/top/index', true)) ?></li>
    </ul>
  </div>

  <div id="footer_link" style="line-height:1em;text-align:center;">
<!--
    <?php echo link_to('女の子ﾌﾞﾛｸﾞ', 'http://blog.livedoor.jp/honoka0430/') ?><br />
    <?php echo link_to('店長日記', 'http://blog.livedoor.jp/tk6776/', array('target'=>'_blank')) ?>
-->
    <br clear="all"/>
    <hr color="#666666;" size="1" />
- 待合せ型人妻ﾎﾃﾙｴｽﾃ -<br />美熟な奥さん<br />
        <a href="tel:06-6130-8535">06-6130-8535</a><br />
[営業時間]10:00 - 22:00<br />
&copy;bijyuku.com <?php echo date("Y") ?><br />
        <a href="mailto:info@bijyuku.com">info@bijyuku.com</a><br />
    <div><?php echo link_to('お問い合わせ', url_for('inquiry/new?tid=3'), array('class'=>'link')) ?>&nbsp;|&nbsp;<?php echo link_to('求人案内', url_for('recruit/index')) ?></div>
  </div>

  </div><!-- /.mobile -->
  <?php
//  $googleAnalyticsImageUrl = googleAnalyticsGetImageUrl();
//  echo '<img src="' . $googleAnalyticsImageUrl . '" />';
  ?>
  </body>
</html>
