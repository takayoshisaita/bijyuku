<h2>コンパニオン一覧</h2>

<div id="companions">

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>名前</th>
      <th>ランク</th>
      <th>ﾋﾟｯｸｱｯﾌﾟNo.</th>
      <th>表示順</th>
      <th>年齢</th>
      <th>身長・スリーサイズ</th>
      <th>画像1</th>
      <th>画像2</th>
      <th>画像3</th>
      <th>画像4</th>
      <th>画像5</th>
      <th>Item1</th>
      <th>Item2</th>
      <th>Item3</th>
      <th>Item4</th>
      <th>Item5</th>
      <th>コメント</th>
      <th>店舗コメント</th>
      <th>一行コメント</th>
      <th>ご案内可能時刻</th>
      <th>作成日</th>
      <th>更新日</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($companions as $companion): ?>
    <tr>
      <td><a href="<?php echo url_for('companion/edit?id='.$companion->getId()) ?>"><?php echo $companion->getId() ?></a></td>
      <td>
        <a href="<?php echo url_for('companion/edit?id='.$companion->getId()) ?>">
          <?php echo $companion->getName() ?></td>
        </a>
      <td><?php echo $companion->getRankId() ?></td>
      <td><?php echo $companion->getPickupId() ?></td>
      <td><?php echo $companion->getListOrder() ?></td>
      <td><?php echo $companion->getAge() ?></td>
      <td class="spec">
身長：<?php echo $companion->getT() ?>/<br />
バスト：<?php echo $companion->getB() ?>（<?php echo $companion->getCup() ?>）/<br />
ウエスト：<?php echo $companion->getW() ?>/<br />
ヒップ：<?php echo $companion->getH() ?>/
      </td>
      <td class="thumbnail">
        <a href="<?php echo url_for('companion/edit?id='.$companion->getId()) ?>">
        <img src="/uploads/companion/<?php echo $companion->getPic1()?>" alt="<?php echo $companion->getName()?>" />
        </a>
      </td>
      <td class="thumbnail">
        <a href="<?php echo url_for('companion/edit?id='.$companion->getId()) ?>">
        <img src="/uploads/companion/<?php echo $companion->getPic2()?>" alt="<?php echo $companion->getName()?>" />
        </a>
      </td>
      <td class="thumbnail">
        <a href="<?php echo url_for('companion/edit?id='.$companion->getId()) ?>">
        <img src="/uploads/companion/<?php echo $companion->getPic3()?>" alt="<?php echo $companion->getName()?>" />
        </a>
      </td>
      <td class="thumbnail">
        <a href="<?php echo url_for('companion/edit?id='.$companion->getId()) ?>">
        <img src="/uploads/companion/<?php echo $companion->getPic4()?>" alt="<?php echo $companion->getName()?>" />
        </a>
      </td>
      <td class="thumbnail">
        <a href="<?php echo url_for('companion/edit?id='.$companion->getId()) ?>">
        <img src="/uploads/companion/<?php echo $companion->getPic5()?>" alt="<?php echo $companion->getName()?>" />
        </a>
      </td>
      <td><?php echo $companion->getItem1() ?></td>
      <td><?php echo $companion->getItem2() ?></td>
      <td><?php echo $companion->getItem3() ?></td>
      <td><?php echo $companion->getItem4() ?></td>
      <td><?php echo $companion->getItem5() ?></td>
      <td><?php echo $companion->getComment() ?></td>
      <td><?php echo $companion->getShopcomment() ?></td>
      <td><?php echo $companion->getOnelinecomment() ?></td>
      <td><?php echo $companion->getTimeup() ?></td>
      <td><?php echo $companion->getCreatedAt() ?></td>
      <td><?php echo $companion->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('companion/new') ?>">新規作成</a>
