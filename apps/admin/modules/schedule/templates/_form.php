<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('schedule/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('schedule/index') ?>">一覧に戻る</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('削除', 'schedule/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '削除してよろしいですか？')) ?>
          <?php endif; ?>
          <input type="submit" value="保　存" />
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
        <th><?php echo $form['pic']->renderLabel() ?></th>
        <td>
          <?php echo $form['pic']->renderError() ?>
          <?php echo $form['pic'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['companions_list']->renderLabel() ?></th>
        <td>
          <?php echo $form['companions_list']->renderError() ?>
          <?php echo $form['companions_list'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
