<div id="ryoukin">

<h1 style="font-size: medium;font-weight: bolder;height: 1.2em;margin-bottom: 4px;padding-top: 8px;text-indent: 0;">
◆◇料金のご案内◇◆
</h1>
<h2 style="font-size: small; margin-top:10px;">★★★お得なｲﾍﾞﾝﾄ情報★★★</h2>
<div style="text-align:center; margin-bottom: 10px;">
  <?php echo include_component('event', 'eventwidgetpricemob') ?>
</div>

<h2 style="
  background-image: url(/images/price/ryoukin_th.gif);
  text-align:center; color:#FFFFFF;
  font-size: small;
  font-weight: bold;
  padding: 2px 20px;">
  ●●●通常料金●●●</h2>

<?php foreach($Prices as $Price): ?>
<table style="width: 100%;border-collapse: collapse;border-spacing: 0;">
  <thead>
    <tr>
      <td colspan="2" style="
        background-image: url(/images/price/ryoukin_th.gif);
        border: medium none;
        text-align:center; color:#FFFFFF;
        font-size: small;
        font-weight: bold;
        padding: 2px 20px;">
      <?php echo $Price->getTitleCol1() ?>
      </td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Price->getTitleRow1() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Price->getRow1col1() ?></td>
    </tr>
    <tr>
      <td style="
        border-left: 1px solid #5A2714;
        text-align: right;
        background-color: #FFFFFF;
        border-bottom: 1px solid #5A2714;
        border-top: 1px solid #5A2714;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        color: #5A2714;">
        <?php echo $Price->getTitleRow2() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Price->getRow2col1() ?></td>
    </tr>
    <tr>
      <td style="
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        border-bottom: 1px solid #5A2714;
        border-top: 1px solid #5A2714;
        color: #5A2714;">
        <?php echo $Price->getTitleRow3() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Price->getRow3col1() ?></td>
    </tr>
    <tr>
      <td style="
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        border-bottom: 1px solid #5A2714;
        border-top: 1px solid #5A2714;
        color: #5A2714;">
        <?php echo $Price->getTitleRow4() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Price->getRow4col1() ?></td>
    </tr>
    <tr>
      <td style="
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        border-bottom: 1px solid #5A2714;
        border-top: 1px solid #5A2714;
        color: #5A2714;">
        <?php echo $Price->getTitleRow5() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Price->getRow5col1() ?></td>
    </tr>
    <?php if($Price->getEntyou() != ''): ?>
    <tr>
      <td style="
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        border-bottom: 1px solid #5A2714;
        border-top: 1px solid #5A2714;
        color: #5A2714;">
        <?php echo $Price->getEntyou() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Price->getEntyouKakaku() ?></td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
<?php endforeach; ?>

<?php if($Prices[0]->getOption1Title() != ''): ?>
<table style="width: 100%;border-collapse: collapse;border-spacing: 0;">
  <thead>
    <tr>
      <td colspan="2" style="
        background-image: url(/images/price/ryoukin_th.gif);
        border: medium none;
        text-align:center; color:#FFFFFF;
        font-size: small;
        font-weight: bold;
        padding: 2px 20px;">
      オプション
      </td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption1Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption1Price() ?></td>
    </tr>
    <?php if($Prices[0]->getOption2Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption2Title() ?></td>
      <td style="
        width: 50%;
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption2Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption3Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption3Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption3Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption4Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption4Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption4Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption5Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption5Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption5Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption6Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption6Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption6Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption7Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption7Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption7Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption8Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption8Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption8Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption9Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption9Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption9Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption10Title() != ''): ?>
    <tr>
      <td style="
        border-top: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        border-left: 1px solid #5A2714;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        background-color: #FFFFFF;
        color: #5A2714;">
       <?php echo $Prices[0]->getOption10Title() ?></td>
      <td style="
        padding-right: 10%;
        text-align: right;
        font-family: inherit;
        font-size: small;
        font-weight: bold;
        border-top: 1px solid #5A2714;
        border-right: 1px solid #5A2714;
        border-bottom: 1px solid #5A2714;
        background-color: #FFFFFF;
        color: #5A2714;">
        <?php echo $Prices[0]->getOption10Price() ?></td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
<?php endif; ?>

<div id="ps" style="height:50%; width:90%; border:none; margin:0 auto;padding: 2% 0 2% 10%;text-align: left;">
  <ul style="list-style-image: url(/images/common/mark_square.gif);">
  <?php if($sf_request->getParameter('shop') == 4): ?>
  <li>ホテル代別途</li>
  <?php endif; ?>
  <?php if($sf_request->getParameter('shop') == 5): ?>
<!--
  <li><span style="font-weight:bold;">※※全コースホテル代込※※</span></li>
 -->
  <li>全コース、基本サービスとしてSPタイム時にトップレスが含まれます。</li>
  <?php endif; ?>
  <li>電話予約無料</li>
  <li>ﾈｯﾄ指名料・本指名料ともに<?php echo $Prices[0]->getShimeiryou() ?></li>
<!--
  <li>ご新規様は別途入会金￥1,000頂戴いたします。
 -->
  </ul>
</div>

</div>