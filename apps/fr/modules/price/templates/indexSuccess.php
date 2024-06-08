<div id="ryoukin">
  <div class="title">
    <h1>◆◇料金のご案内◇◆</h1>
  </div>

  <div id="event_title">
    開催中<br />
    イベント<br />
    情報
  </div>

  <?php echo include_component('event', 'eventwidgetprice') ?>
  <?php echo image_tag('/images/price/ryoukin_title.gif') ?>

<?php foreach($Prices as $Price): ?>
<table>
  <thead>
    <tr>
      <td colspan="3">
      <?php echo $Price->getTitleCol1() ?>
      </td>
    </tr>
  </thead>
  <tbody>
    <?php if($Price->getTitleRow1() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Price->getTitleRow1() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Price->getRow1col1() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Price->getTitleRow2() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Price->getTitleRow2() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Price->getRow2col1() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Price->getTitleRow3() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Price->getTitleRow3() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Price->getRow3col1() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Price->getTitleRow4() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Price->getTitleRow4() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Price->getRow4col1() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Price->getTitleRow5() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Price->getTitleRow5() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Price->getRow5col1() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Price->getEntyou() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Price->getEntyou() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Price->getEntyouKakaku() ?></td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
<?php endforeach; ?>

<?php if($Prices[0]->getOption1Title() != ''): ?>
<table>
  <thead>
    <tr>
      <td colspan="3">
      オプション
      </td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption1Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption1Price() ?></td>
    </tr>
    <?php if($Prices[0]->getOption2Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption2Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption2Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption3Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption3Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption3Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption4Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption4Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption4Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption5Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption5Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption5Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption6Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption6Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption6Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption7Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption7Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption7Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption8Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption8Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption8Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption9Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption9Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption9Price() ?></td>
    </tr>
    <?php endif; ?>
    <?php if($Prices[0]->getOption10Title() != ''): ?>
    <tr>
      <td class="l_col"><?php echo $Prices[0]->getOption10Title() ?></td>
      <td class="m_col">
      <?php if($Shop_id == 4): ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi_ms.gif') ?>
      <?php else: ?>
      <?php echo image_tag('/images/price/ryoukin_yajirushi.gif') ?>
      <?php endif; ?>
      </td>
      <td class="r_col"><?php echo $Prices[0]->getOption10Price() ?></td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
<?php endif; ?>

<div id="ps" <?php if($sf_request->getParameter('shop') == 5): ?>style="width: 100%;"<?php endif; ?>>
  <ul>
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
  <li>ネット指名料・本指名料ともに￥<?php echo $Prices[0]->getShimeiryou() ?></li>
<!--
  <li>ご新規様は別途入会金￥1,000頂戴いたします。
 -->
  </ul>
</div>

</div>