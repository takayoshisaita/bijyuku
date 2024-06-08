<h1>Mailmags List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Email</th>
      <th>Name</th>
      <th>Comment</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mailmags as $mailmag): ?>
    <tr>
      <td><a href="<?php echo url_for('mailmag/edit?id='.$mailmag->getId()) ?>"><?php echo $mailmag->getId() ?></a></td>
      <td><?php echo $mailmag->getEmail() ?></td>
      <td><?php echo $mailmag->getName() ?></td>
      <td><?php echo $mailmag->getComment() ?></td>
      <td><?php echo $mailmag->getCreatedAt() ?></td>
      <td><?php echo $mailmag->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('mailmag/new') ?>">New</a>
