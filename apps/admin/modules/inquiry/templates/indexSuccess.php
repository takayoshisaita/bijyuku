<h1>Inquirys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Email</th>
      <th>Title</th>
      <th>Name</th>
      <th>Comment</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($inquirys as $inquiry): ?>
    <tr>
      <td><a href="<?php echo url_for('inquiry/edit?id='.$inquiry->getId()) ?>"><?php echo $inquiry->getId() ?></a></td>
      <td><?php echo $inquiry->getEmail() ?></td>
      <td><?php echo $inquiry->getTitleId() ?></td>
      <td><?php echo $inquiry->getName() ?></td>
      <td><?php echo $inquiry->getComment() ?></td>
      <td><?php echo $inquiry->getCreatedAt() ?></td>
      <td><?php echo $inquiry->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('inquiry/new') ?>">New</a>
