<h1>Shops List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>Telno</th>
      <th>Url</th>
      <th>Mobile url</th>
      <th>Comment</th>
      <th>Pic</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($shops as $shop): ?>
    <tr>
      <td><a href="<?php echo url_for('index/edit?id='.$shop->getId()) ?>"><?php echo $shop->getId() ?></a></td>
      <td><?php echo $shop->getName() ?></td>
      <td><?php echo $shop->getUsername() ?></td>
      <td><?php echo $shop->getPassword() ?></td>
      <td><?php echo $shop->getTelno() ?></td>
      <td><?php echo $shop->getUrl() ?></td>
      <td><?php echo $shop->getMobileUrl() ?></td>
      <td><?php echo $shop->getComment() ?></td>
      <td><?php echo $shop->getPic() ?></td>
      <td><?php echo $shop->getCreatedAt() ?></td>
      <td><?php echo $shop->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('index/new') ?>">New</a>
