<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<script type="text/javascript">
<!--

function change_hour(idx, ctrl){
  var frm = document.form;

  if(idx.match(/companion_.*_hour/i))
  {
    var objhr = document.getElementById(idx);
    minidx = idx.replace("hour", "minute");
    var objm = document.getElementById(minidx);

    if(objhr.selectedIndex == 0)
    {
      objm.options[0].selected = true;
    }
    else if(objhr.selectedIndex != 0 && objm.selectedIndex == 0)
    {
      objm.options[1].selected = true;
    }
    else if(objhr.selectedIndex == 18 && objm.selectedIndex != 1)
    {
      objm.options[1].selected = true;
    }
  }
}

// -->
</script>

<div id="compsche">
<form action="<?php echo url_for('comp_sche/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table id="comp">
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
      <tr>
        <th><?php echo $form['shop_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['shop_id']->renderError() ?>
          <?php echo $form['shop_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['timeup']->renderLabel() ?></th>
        <td>
          <?php echo $form['timeup']->renderError() ?>
          <?php echo $form['timeup']->renderRow(array('onchange'=>'change_hour(this.id, this)')) ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['icons_list']->renderLabel() ?></th>
        <td>
          <?php echo $form['icons_list']->renderError() ?>
          <?php echo $form['icons_list'] ?>
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
          <?php echo $form['intime']->renderRow(array('onchange'=>'change_hour(this.id, this)')) ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['outtime']->renderLabel() ?></th>
        <td>
          <?php echo $form['outtime']->renderError() ?>
          <?php echo $form['outtime']->renderRow(array('onchange'=>'change_hour(this.id, this)')) ?>
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

  <div id="picbox" class="clearfix">
    <div class="pic">
      <ul>
      <?php echo $form['pic1']->renderError() ?>
      <?php echo $form['pic1']->renderRow() ?>
      </ul>
    </div>
    <div class="pic">
      <ul>
      <?php echo $form['pic2']->renderError() ?>
      <?php echo $form['pic2']->renderRow() ?>
      </ul>
    </div>
    <div class="pic">
      <ul>
      <?php echo $form['pic3']->renderError() ?>
      <?php echo $form['pic3']->renderRow() ?>
      </ul>
    </div>
    <div class="pic">
      <ul>
      <?php echo $form['pic4']->renderError() ?>
      <?php echo $form['pic4']->renderRow() ?>
      </ul>
    </div>
    <div class="pic">
      <ul>
      <?php echo $form['pic5']->renderError() ?>
      <?php echo $form['pic5']->renderRow() ?>
      </ul>
    </div>
  </div>
  <br clear="all" />

  <div id="schedulebox">
  <?php foreach($form['schedules'] as $k => $schedule): ?>
    <div class="daybox" style="float: left;">
      <div>【<?php echo $Weeks[($k%7)] ?>】</div>
      <div>
        <?php echo $schedule['companion_id'] ?>
        <?php echo $schedule['date']->renderRow() ?><br clear="all" />
        <?php echo $schedule['intime']->renderRow(array('onchange'=>'change_hour(this.id, this)')) ?><br clear="all" />
        <?php echo $schedule['outtime']->renderRow(array('onchange'=>'change_hour(this.id, this)')) ?><br clear="all" />
      </div>
    </div>
  <?php endforeach;  ?>
　 </div>

</form>
</div>
