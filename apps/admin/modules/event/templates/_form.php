<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('event/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('event/index') ?>">一覧に戻る</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('削除', 'event/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'ほんまに削除しはりますか？')) ?>
          <?php endif; ?>
          <input type="submit" value="保　存" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['disp_order']->renderLabel() ?></th>
        <td>
          <?php echo $form['disp_order']->renderError() ?>
          <?php echo $form['disp_order'] ?>
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
        <th><?php echo $form['title']->renderLabel() ?></th>
        <td>
          <?php echo $form['title']->renderError() ?>
          <?php echo $form['title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['comment']->renderLabel() ?></th>
        <td>
          <?php echo $form['comment']->renderError() ?>
          <?php echo $form['comment'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['show_in_pricepage']->renderLabel() ?></th>
        <td>
          <?php echo $form['show_in_pricepage']->renderError() ?>
          <?php echo $form['show_in_pricepage'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
