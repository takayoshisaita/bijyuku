<h1>Schedules List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Companion</th>
      <th>Date</th>
      <th>Intime</th>
      <th>Outtime</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($schedules as $schedule): ?>
    <tr>
      <td><a href="<?php echo url_for('schedule/edit?id='.$schedule->getId()) ?>"><?php echo $schedule->getId() ?></a></td>
      <td><?php echo $schedule->getCompanionId() ?></td>
      <td><?php echo $schedule->getDate() ?></td>
      <td><?php echo $schedule->getIntime() ?></td>
      <td><?php echo $schedule->getOuttime() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('schedule/new') ?>">New</a>
