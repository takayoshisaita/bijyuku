<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('price/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('price/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'price/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nyuukaikin']->renderLabel() ?></th>
        <td>
          <?php echo $form['nyuukaikin']->renderError() ?>
          <?php echo $form['nyuukaikin'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['shimeiryou']->renderLabel() ?></th>
        <td>
          <?php echo $form['shimeiryou']->renderError() ?>
          <?php echo $form['shimeiryou'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['netshimei']->renderLabel() ?></th>
        <td>
          <?php echo $form['netshimei']->renderError() ?>
          <?php echo $form['netshimei'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_col1']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_col1']->renderError() ?>
          <?php echo $form['title_col1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_col2']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_col2']->renderError() ?>
          <?php echo $form['title_col2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_col3']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_col3']->renderError() ?>
          <?php echo $form['title_col3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_col4']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_col4']->renderError() ?>
          <?php echo $form['title_col4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_col5']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_col5']->renderError() ?>
          <?php echo $form['title_col5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_row1']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_row1']->renderError() ?>
          <?php echo $form['title_row1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_row2']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_row2']->renderError() ?>
          <?php echo $form['title_row2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_row3']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_row3']->renderError() ?>
          <?php echo $form['title_row3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_row4']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_row4']->renderError() ?>
          <?php echo $form['title_row4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['title_row5']->renderLabel() ?></th>
        <td>
          <?php echo $form['title_row5']->renderError() ?>
          <?php echo $form['title_row5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row1col1']->renderLabel() ?></th>
        <td>
          <?php echo $form['row1col1']->renderError() ?>
          <?php echo $form['row1col1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row1col2']->renderLabel() ?></th>
        <td>
          <?php echo $form['row1col2']->renderError() ?>
          <?php echo $form['row1col2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row1col3']->renderLabel() ?></th>
        <td>
          <?php echo $form['row1col3']->renderError() ?>
          <?php echo $form['row1col3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row1col4']->renderLabel() ?></th>
        <td>
          <?php echo $form['row1col4']->renderError() ?>
          <?php echo $form['row1col4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row1col5']->renderLabel() ?></th>
        <td>
          <?php echo $form['row1col5']->renderError() ?>
          <?php echo $form['row1col5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row2col1']->renderLabel() ?></th>
        <td>
          <?php echo $form['row2col1']->renderError() ?>
          <?php echo $form['row2col1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row2col2']->renderLabel() ?></th>
        <td>
          <?php echo $form['row2col2']->renderError() ?>
          <?php echo $form['row2col2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row2col3']->renderLabel() ?></th>
        <td>
          <?php echo $form['row2col3']->renderError() ?>
          <?php echo $form['row2col3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row2col4']->renderLabel() ?></th>
        <td>
          <?php echo $form['row2col4']->renderError() ?>
          <?php echo $form['row2col4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row2col5']->renderLabel() ?></th>
        <td>
          <?php echo $form['row2col5']->renderError() ?>
          <?php echo $form['row2col5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row3col1']->renderLabel() ?></th>
        <td>
          <?php echo $form['row3col1']->renderError() ?>
          <?php echo $form['row3col1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row3col2']->renderLabel() ?></th>
        <td>
          <?php echo $form['row3col2']->renderError() ?>
          <?php echo $form['row3col2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row3col3']->renderLabel() ?></th>
        <td>
          <?php echo $form['row3col3']->renderError() ?>
          <?php echo $form['row3col3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row3col4']->renderLabel() ?></th>
        <td>
          <?php echo $form['row3col4']->renderError() ?>
          <?php echo $form['row3col4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row3col5']->renderLabel() ?></th>
        <td>
          <?php echo $form['row3col5']->renderError() ?>
          <?php echo $form['row3col5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row4col1']->renderLabel() ?></th>
        <td>
          <?php echo $form['row4col1']->renderError() ?>
          <?php echo $form['row4col1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row4col2']->renderLabel() ?></th>
        <td>
          <?php echo $form['row4col2']->renderError() ?>
          <?php echo $form['row4col2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row4col3']->renderLabel() ?></th>
        <td>
          <?php echo $form['row4col3']->renderError() ?>
          <?php echo $form['row4col3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row4col4']->renderLabel() ?></th>
        <td>
          <?php echo $form['row4col4']->renderError() ?>
          <?php echo $form['row4col4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row4col5']->renderLabel() ?></th>
        <td>
          <?php echo $form['row4col5']->renderError() ?>
          <?php echo $form['row4col5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row5col1']->renderLabel() ?></th>
        <td>
          <?php echo $form['row5col1']->renderError() ?>
          <?php echo $form['row5col1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row5col2']->renderLabel() ?></th>
        <td>
          <?php echo $form['row5col2']->renderError() ?>
          <?php echo $form['row5col2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row5col3']->renderLabel() ?></th>
        <td>
          <?php echo $form['row5col3']->renderError() ?>
          <?php echo $form['row5col3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row5col4']->renderLabel() ?></th>
        <td>
          <?php echo $form['row5col4']->renderError() ?>
          <?php echo $form['row5col4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['row5col5']->renderLabel() ?></th>
        <td>
          <?php echo $form['row5col5']->renderError() ?>
          <?php echo $form['row5col5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['entyou']->renderLabel() ?></th>
        <td>
          <?php echo $form['entyou']->renderError() ?>
          <?php echo $form['entyou'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['entyou_kakaku']->renderLabel() ?></th>
        <td>
          <?php echo $form['entyou_kakaku']->renderError() ?>
          <?php echo $form['entyou_kakaku'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option1_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option1_title']->renderError() ?>
          <?php echo $form['option1_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option2_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option2_title']->renderError() ?>
          <?php echo $form['option2_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option3_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option3_title']->renderError() ?>
          <?php echo $form['option3_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option4_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option4_title']->renderError() ?>
          <?php echo $form['option4_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option5_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option5_title']->renderError() ?>
          <?php echo $form['option5_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option6_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option6_title']->renderError() ?>
          <?php echo $form['option6_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option7_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option7_title']->renderError() ?>
          <?php echo $form['option7_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option8_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option8_title']->renderError() ?>
          <?php echo $form['option8_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option9_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option9_title']->renderError() ?>
          <?php echo $form['option9_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option10_title']->renderLabel() ?></th>
        <td>
          <?php echo $form['option10_title']->renderError() ?>
          <?php echo $form['option10_title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option1_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option1_price']->renderError() ?>
          <?php echo $form['option1_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option2_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option2_price']->renderError() ?>
          <?php echo $form['option2_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option3_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option3_price']->renderError() ?>
          <?php echo $form['option3_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option4_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option4_price']->renderError() ?>
          <?php echo $form['option4_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option5_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option5_price']->renderError() ?>
          <?php echo $form['option5_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option6_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option6_price']->renderError() ?>
          <?php echo $form['option6_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option7_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option7_price']->renderError() ?>
          <?php echo $form['option7_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option8_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option8_price']->renderError() ?>
          <?php echo $form['option8_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option9_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option9_price']->renderError() ?>
          <?php echo $form['option9_price'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['option10_price']->renderLabel() ?></th>
        <td>
          <?php echo $form['option10_price']->renderError() ?>
          <?php echo $form['option10_price'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
