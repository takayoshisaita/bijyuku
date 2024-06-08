<h1>Infos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Comment</th>
      <th>Pic</th>
      <th>Is published</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($infos as $info): ?>
    <tr>
      <td><a href="<?php echo url_for('info/edit?id='.$info->getId()) ?>"><?php echo $info->getId() ?></a></td>
      <td><?php echo $info->getTitle() ?></td>
      <td><?php echo $info->getComment() ?></td>
      <td><?php echo $info->getPic() ?></td>
      <td><?php echo $info->getIsPublished() ?></td>
      <td><?php echo $info->getCreatedAt() ?></td>
      <td><?php echo $info->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('info/new') ?>">New</a>
