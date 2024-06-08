<h1>Linkbanners List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Pic</th>
      <th>Name</th>
      <th>Url</th>
      <th>Comment</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($linkbanners as $linkbanner): ?>
    <tr>
      <td><a href="<?php echo url_for('linkbanner/edit?id='.$linkbanner->getId()) ?>"><?php echo $linkbanner->getId() ?></a></td>
      <td><?php echo $linkbanner->getPic() ?></td>
      <td><?php echo $linkbanner->getName() ?></td>
      <td><?php echo $linkbanner->getUrl() ?></td>
      <td><?php echo $linkbanner->getComment() ?></td>
      <td><?php echo $linkbanner->getCreatedAt() ?></td>
      <td><?php echo $linkbanner->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('linkbanner/new') ?>">New</a>
