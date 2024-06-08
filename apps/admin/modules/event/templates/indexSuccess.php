<h1>イベント一覧</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>表示順</th>
      <th>画像</th>
      <th>タイトル</th>
      <th>コメント</th>
      <th>料金表ﾍﾟｰｼﾞ<br />に表示</th>
      <th>作成日</th>
      <th>更新日</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($events as $event): ?>
    <tr>
      <td><a href="<?php echo url_for('event/edit?id='.$event->getId()) ?>"><?php echo $event->getId() ?></a></td>
      <td><?php echo $event->getDispOrder() ?></td>
      <td><?php echo image_tag('/uploads/event/'.$event->getPic(), array('style'=>'width:120px;')) ?></td>
      <td><?php echo $event->getTitle() ?></td>
      <td><?php echo $event->getComment(ESC_RAW) ?></td>
      <td><?php echo $event->getShowInPricepage() ?></td>
      <td><?php echo $event->getCreatedAt() ?></td>
      <td><?php echo $event->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('event/new') ?>">New</a>
