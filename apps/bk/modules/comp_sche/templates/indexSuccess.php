<h1>出勤表</h1>

<form action="<?php echo url_for('comp_sche/index?shop_id='.$Shop_id) ?>" method="post">
  <input type="submit" name="updatetimeup" value="ご案内可能時刻をリセット" />
  <span style="font-weight:bold;color:#FF0000;">←！！【注意】問答無用で当日の出勤時刻に書き換わります(22:00以降は翌日出勤予定の女性が対象)！！</span>
</form>

<table style="margin-top:4px;">
  <thead>
    <tr>
      <th>No.</th>
      <th>店舗</th>
      <th>お名前</th>
      <th>ご案内<br />可能時刻</th>
      <th>アイコン</th>
      <th>ﾚｷﾞｭﾗｰ<br />出勤時刻</th>
      <th>ﾚｷﾞｭﾗｰ<br />退勤時刻</th>
      <th>本日&nbsp;<?php echo date("n/j") ?><br />出勤時刻</th>
      <th>本日&nbsp;<?php echo date("n/j") ?><br />退勤時刻</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($companions as $companion): ?>
    <tr>
      <td><a href="<?php echo url_for('comp_sche/edit?id='.$companion->getId()) ?>"><?php echo $companion->getId() ?></a></td>
      <td><?php echo $companion->getShop()->getName() ?></td>
      <td><a href="<?php echo url_for('comp_sche/edit?id='.$companion->getId()) ?>"><?php echo $companion->getName() ?></a></td>
      <td><?php echo $companion->getTimeup() ?></td>
      <td><?php include_component('companion', 'geticons', array('cid' => $companion->getId())) ?></td>
      <td><?php echo $companion->getIntime() ?></td>
      <td><?php echo $companion->getOuttime() ?></td>
      <td><?php echo $companion->getIntimeToday() ?></td>
      <td><?php echo $companion->getOuttimeToday() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



<!--
  <a href="<?php echo url_for('comp_sche/new') ?>">新規作成</a>
-->