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
          &nbsp;<a href="<?php echo url_for('comp_sche/index') ?>">一覧に戻る</a>
<!--
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'comp_sche/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
-->
          <input type="submit" name="saveandreturn" value="保存して一覧に戻る" />
          <input type="submit" value="保存" />
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
<!--
      <tr>
        <th><?php echo $form['timeup']->renderLabel() ?></th>
        <td>
          <?php echo $form['timeup']->renderError() ?>
          <?php echo $form['timeup'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['onelinecomment']->renderLabel() ?></th>
        <td>
          <?php echo $form['onelinecomment']->renderError() ?>
          <?php echo $form['onelinecomment'] ?>
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
    </tbody>
  </table>
-->

  <div id="schedulebox">
  <?php foreach($form['schedules'] as $k => $schedule): ?>
    <div class="daybox" style="float: left;">
      <div>【<?php echo $Weeks[($k%7)] ?>】</div>
      <div>
        <?php echo $schedule['companion_id'] ?>
        <?php echo $schedule['date']->renderRow() ?><br clear="all" />
        <?php echo $schedule['intime']->renderRow() ?><br clear="all" />
        <?php echo $schedule['outtime']->renderRow() ?><br clear="all" />
<!--
        <?php echo $schedule['timeup']->renderRow() ?>
-->
      </div>
    </div>
  <?php endforeach;  ?>
　 </div>

</form>
