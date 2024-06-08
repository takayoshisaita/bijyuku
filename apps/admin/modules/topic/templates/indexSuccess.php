<h2>新着情報一覧</h2>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>タイトル</th>
      <th>内容</th>
      <th>カテゴリー</th>
      <th>画像</th>
      <th>公開/<br />非公開</th>
      <th>作成日</th>
      <th>更新日</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($topics as $topic): ?>
    <tr>
      <td><a href="<?php echo url_for('topic/edit?id='.$topic->getId()) ?>"><?php echo $topic->getId() ?></a></td>
      <td><a href="<?php echo url_for('topic/edit?id='.$topic->getId()) ?>"><?php echo $topic->getTitle() ?></a></td>
      <td><?php echo $topic->getComment(ESC_RAW) ?></td>
      <td></td>
      <td><?php echo image_tag('/uploads/topic/'.$topic->getPic(), array('style'=>'width:120px;')) ?></td>
      <td><?php echo($topic->getIsPublished() ? '公開' : '非公開') ?></td>
      <td><?php echo $topic->getCreatedAt() ?></td>
      <td><?php echo $topic->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('topic/new') ?>">新規作成</a>
