<?php include_partial('shop/adminmenu', array('shop' => $Shop)) ?>

<div id="shop_admin" class="clearfix">
  <img src="/uploads/shop/<?php echo $Shop['pic'] ?>" id="pic" />
  <table>
  <tr>
    <th>店舗名</td>
    <td><?php echo $Shop['name'] ?></td>
  </tr>
  <tr>
    <th>電話番号</th>
    <td><?php echo $Shop['telno'] ?></td>
  </tr>
  <tr>
    <th>URL</th>
    <td><?php echo $Shop['url'] ?></td>
  </tr>
  <tr>
    <th>携帯URL</th>
    <td><?php echo $Shop['mobile_url'] ?></td>
  </tr>
  </table>
</div><!-- /#shop_admin -->

<!--
<div id="admininfos" class="clearfix">
  <h2>システム管理部からのお知らせ</h2>
  <div id="content" class="clearfix">
  <?php foreach($Admininfos as $Admininfo) : ?>
    <div class="admininfo clearfix">
      <div class="title">
      <div class="datetime"><?php echo date( "Y/m/d(D)G:i", strtotime($Admininfo->getCreatedAt()) ) ?></div>
      <?php echo $Admininfo->getTitle() ?>
      </div>
      <div class="comment">
        <?php if($Admininfo->getPic()): ?>
        <?php echo image_tag('/uploads/admininfo/'.$Admininfo->getPic()) ?>
        <?php endif; ?>
        <pre class="pre"><?php echo $Admininfo->getComment() ?></pre>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
-->
