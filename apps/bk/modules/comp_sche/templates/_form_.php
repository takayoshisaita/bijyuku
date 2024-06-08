<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<!--
<div>
  <?php echo $form ?>
</div>
-->

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('comp_sche/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('comp_sche/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'comp_sche/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['timeup']->renderLabel() ?></th>
        <td>
          <?php echo $form['timeup']->renderError() ?>
          <?php echo $form['timeup'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['intime']->renderLabel() ?></th>
        <td>
          <?php echo $form['intime']->renderError() ?>
          <?php echo $form['intime'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['outtime']->renderLabel() ?></th>
        <td>
          <?php echo $form['outtime']->renderError() ?>
          <?php echo $form['outtime'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['weeks_list']->renderLabel() ?></th>
        <td>
          <?php echo $form['weeks_list']->renderError() ?>
          <?php echo $form['weeks_list'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['copy_to_thisweek']->renderLabel() ?></th>
        <td>
          <?php echo $form['copy_to_thisweek']->renderError() ?>
          <?php echo $form['copy_to_thisweek'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['copy_to_nextweek']->renderLabel() ?></th>
        <td>
          <?php echo $form['copy_to_nextweek']->renderError() ?>
          <?php echo $form['copy_to_nextweek'] ?>
        </td>
      </tr>
    </tbody>
  </table>

  <div id="schedulebox" style="width: 1300px;">
    <div><?php echo $form['schedules']->renderLabel() ?></div>
    <div><?php echo $form['schedules']->renderError() ?></div>
    <div><?php echo $form['schedules'] ?></div>
　 </div>

</form>
