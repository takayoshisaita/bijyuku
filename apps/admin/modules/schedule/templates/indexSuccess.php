<h1>Schedules List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Pic</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($schedules as $schedule): ?>
    <tr>
      <td><a href="<?php echo url_for('schedule/edit?id='.$schedule->getId()) ?>"><?php echo $schedule->getId() ?></a></td>
      <td><?php echo $schedule->getName() ?></td>
      <td><?php echo $schedule->getPic() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('schedule/new') ?>">New</a>
