<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('price/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

  <table class="price_table">
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
      </tr>
      <tr>
        <td><?php echo $form['shop_id']->renderLabel() ?></td>
        <td>
          <?php echo $form['shop_id']->renderError() ?>
          <?php echo $form['shop_id'] ?>
        </td>
      </tr>
      <tr>
        <td><?php echo $form['category_id']->renderLabel() ?></td>
        <td>
          <?php echo $form['category_id']->renderError() ?>
          <?php echo $form['category_id'] ?>
        </td>
      </tr>
      <tr>
        <td><?php echo $form['shimeiryou']->renderLabel() ?></td>
        <td>
          <?php echo $form['shimeiryou']->renderError() ?>
          <?php echo $form['shimeiryou'] ?>
        </td>
      </tr>
    </tbody>
  </table>
<h2>各コース･時間別料金</h2>
  <table class="price_table">
    <tbody>
      <tr>
        <td></td>
        <td>
          <?php echo $form['title_col1']->renderLabel() ?>
          <?php echo $form['title_col1']->renderError() ?>
          <?php echo $form['title_col1'] ?>
        </td>
        <td>
          <?php echo $form['title_col2']->renderLabel() ?>
          <?php echo $form['title_col2']->renderError() ?>
          <?php echo $form['title_col2'] ?>
        </td>
        <td>
          <?php echo $form['title_col3']->renderLabel() ?>
          <?php echo $form['title_col3']->renderError() ?>
          <?php echo $form['title_col3'] ?>
        </td>
        <td>
          <?php echo $form['title_col4']->renderLabel() ?>
          <?php echo $form['title_col4']->renderError() ?>
          <?php echo $form['title_col4'] ?>
        </td>
        <td>
          <?php echo $form['title_col5']->renderLabel() ?>
          <?php echo $form['title_col5']->renderError() ?>
          <?php echo $form['title_col5'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['title_row1']->renderLabel() ?>
          <?php echo $form['title_row1']->renderError() ?>
          <?php echo $form['title_row1'] ?>
        </td>
        <td>
          <?php echo $form['row1col1']->renderError() ?>
          <?php echo $form['row1col1'] ?>
        </td>
        <td>
          <?php echo $form['row1col2']->renderError() ?>
          <?php echo $form['row1col2'] ?>
        </td>
        <td>
          <?php echo $form['row1col3']->renderError() ?>
          <?php echo $form['row1col3'] ?>
        </td>
        <td>
          <?php echo $form['row1col4']->renderError() ?>
          <?php echo $form['row1col4'] ?>
        </td>
        <td>
          <?php echo $form['row1col5']->renderError() ?>
          <?php echo $form['row1col5'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['title_row2']->renderLabel() ?>
          <?php echo $form['title_row2']->renderError() ?>
          <?php echo $form['title_row2'] ?>
        </td>
        <td>
          <?php echo $form['row2col1']->renderError() ?>
          <?php echo $form['row2col1'] ?>
        </td>
        <td>
          <?php echo $form['row2col2']->renderError() ?>
          <?php echo $form['row2col2'] ?>
        </td>
        <td>
          <?php echo $form['row2col3']->renderError() ?>
          <?php echo $form['row2col3'] ?>
        </td>
        <td>
          <?php echo $form['row2col4']->renderError() ?>
          <?php echo $form['row2col4'] ?>
        </td>
        <td>
          <?php echo $form['row2col5']->renderError() ?>
          <?php echo $form['row2col5'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['title_row3']->renderLabel() ?>
          <?php echo $form['title_row3']->renderError() ?>
          <?php echo $form['title_row3'] ?>
        </td>
        <td>
          <?php echo $form['row3col1']->renderError() ?>
          <?php echo $form['row3col1'] ?>
        </td>
        <td>
          <?php echo $form['row3col2']->renderError() ?>
          <?php echo $form['row3col2'] ?>
        </td>
        <td>
          <?php echo $form['row3col3']->renderError() ?>
          <?php echo $form['row3col3'] ?>
        </td>
        <td>
          <?php echo $form['row3col4']->renderError() ?>
          <?php echo $form['row3col4'] ?>
        </td>
        <td>
          <?php echo $form['row3col5']->renderError() ?>
          <?php echo $form['row3col5'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['title_row4']->renderLabel() ?>
          <?php echo $form['title_row4']->renderError() ?>
          <?php echo $form['title_row4'] ?>
        </td>
        <td>
          <?php echo $form['row4col1']->renderError() ?>
          <?php echo $form['row4col1'] ?>
        </td>
        <td>
          <?php echo $form['row4col2']->renderError() ?>
          <?php echo $form['row4col2'] ?>
        </td>
        <td>
          <?php echo $form['row4col3']->renderError() ?>
          <?php echo $form['row4col3'] ?>
        </td>
        <td>
          <?php echo $form['row4col4']->renderError() ?>
          <?php echo $form['row4col4'] ?>
        </td>
        <td>
          <?php echo $form['row4col5']->renderError() ?>
          <?php echo $form['row4col5'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['title_row5']->renderLabel() ?>
          <?php echo $form['title_row5']->renderError() ?>
          <?php echo $form['title_row5'] ?>
        </td>
        <td>
          <?php echo $form['row5col1']->renderError() ?>
          <?php echo $form['row5col1'] ?>
        </td>
        <td>
          <?php echo $form['row5col2']->renderError() ?>
          <?php echo $form['row5col2'] ?>
        </td>
        <td>
          <?php echo $form['row5col3']->renderError() ?>
          <?php echo $form['row5col3'] ?>
        </td>
        <td>
          <?php echo $form['row5col4']->renderError() ?>
          <?php echo $form['row5col4'] ?>
        </td>
        <td>
          <?php echo $form['row5col5']->renderError() ?>
          <?php echo $form['row5col5'] ?>
        </td>
      </tr>
    </tbody>
  </table>

<h2>延長料金</h2>
  <table class="price_table">
    <tbody>
      <tr>
        <td>
          <?php echo $form['entyou']->renderLabel() ?>
          <?php echo $form['entyou']->renderError() ?>
          <?php echo $form['entyou'] ?>
        </td>
        <td colspan="5" style="text-align: left;">
          <?php echo $form['entyou_kakaku']->renderLabel() ?>
          <?php echo $form['entyou_kakaku']->renderError() ?>
          <?php echo $form['entyou_kakaku'] ?>
        </td>
      </tr>
    </tbody>
  </table>

<h2>オプション料金</h2>
  <table class="price_table">
    <tbody>
      <tr>
        <td>タイトル</td>
        <td>料金</td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option1_title']->renderError() ?>
          <?php echo $form['option1_title'] ?>
        </td>
        <td>
          <?php echo $form['option1_price']->renderError() ?>
          <?php echo $form['option1_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option2_title']->renderError() ?>
          <?php echo $form['option2_title'] ?>
        </td>
        <td>
          <?php echo $form['option2_price']->renderError() ?>
          <?php echo $form['option2_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option3_title']->renderError() ?>
          <?php echo $form['option3_title'] ?>
        </td>
        <td>
          <?php echo $form['option3_price']->renderError() ?>
          <?php echo $form['option3_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option4_title']->renderError() ?>
          <?php echo $form['option4_title'] ?>
        </td>
        <td>
          <?php echo $form['option4_price']->renderError() ?>
          <?php echo $form['option4_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option5_title']->renderError() ?>
          <?php echo $form['option5_title'] ?>
        </td>
        <td>
          <?php echo $form['option5_price']->renderError() ?>
          <?php echo $form['option5_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option6_title']->renderError() ?>
          <?php echo $form['option6_title'] ?>
        </td>
        <td>
          <?php echo $form['option6_price']->renderError() ?>
          <?php echo $form['option6_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option7_title']->renderError() ?>
          <?php echo $form['option7_title'] ?>
        </td>
        <td>
          <?php echo $form['option7_price']->renderError() ?>
          <?php echo $form['option7_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option8_title']->renderError() ?>
          <?php echo $form['option8_title'] ?>
        </td>
        <td>
          <?php echo $form['option8_price']->renderError() ?>
          <?php echo $form['option8_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option9_title']->renderError() ?>
          <?php echo $form['option9_title'] ?>
        </td>
        <td>
          <?php echo $form['option9_price']->renderError() ?>
          <?php echo $form['option9_price'] ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $form['option10_title']->renderError() ?>
          <?php echo $form['option10_title'] ?>
        </td>
        <td>
          <?php echo $form['option10_price']->renderError() ?>
          <?php echo $form['option10_price'] ?>
        </td>
      </tr>
    </tbody>
  </table>

<?php echo $form->renderHiddenFields(false) ?>
<!--
<?php if (!$form->getObject()->isNew()): ?>
  &nbsp;<?php echo link_to('Delete', 'price/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
<?php endif; ?>
-->
<input type="submit" value="保　存" />
&nbsp;<a href="<?php echo url_for('price/index') ?>">一覧へ戻る</a>
&nbsp;<a href="<?php echo url_for('top/index') ?>">管理画面TOPへ戻る</a>

</form>
