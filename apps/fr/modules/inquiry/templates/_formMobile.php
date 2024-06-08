<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for($Route.'?module=inquiry&action='.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td>
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="submit" value="送　信" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <td>
          <?php echo $form['email']->renderLabel() ?><br />
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['name']->renderLabel() ?><br />
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['title_id']->renderLabel() ?><br />
          <?php echo $form['title_id']->renderError() ?>
          <?php echo $form['title_id'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['comment']->renderLabel() ?><br />
          <?php echo $form['comment']->renderError() ?>
          <?php echo $form['comment'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
