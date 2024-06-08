<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('companion/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('companion/index') ?>">一覧に戻る</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('削除', 'companion/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '二度と元には戻せませんが本当に削除してもいいですか？！')) ?>
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
        <th><?php echo $form['shop_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['shop_id']->renderError() ?>
          <?php echo $form['shop_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['rank_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['rank_id']->renderError() ?>
          <?php echo $form['rank_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pickup_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['pickup_id']->renderError() ?>
          <?php echo $form['pickup_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['list_order']->renderLabel() ?></th>
        <td>
          <?php echo $form['list_order']->renderError() ?>
          <?php echo $form['list_order'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['age']->renderLabel() ?></th>
        <td>
          <?php echo $form['age']->renderError() ?>
          <?php echo $form['age'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['t']->renderLabel() ?></th>
        <td>
          <?php echo $form['t']->renderError() ?>
          <?php echo $form['t'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['b']->renderLabel() ?></th>
        <td>
          <?php echo $form['b']->renderError() ?>
          <?php echo $form['b'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cup']->renderLabel() ?></th>
        <td>
          <?php echo $form['cup']->renderError() ?>
          <?php echo $form['cup'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['w']->renderLabel() ?></th>
        <td>
          <?php echo $form['w']->renderError() ?>
          <?php echo $form['w'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['h']->renderLabel() ?></th>
        <td>
          <?php echo $form['h']->renderError() ?>
          <?php echo $form['h'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pic1']->renderLabel() ?></th>
        <td>
          <?php echo $form['pic1']->renderError() ?>
          <?php echo $form['pic1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pic2']->renderLabel() ?></th>
        <td>
          <?php echo $form['pic2']->renderError() ?>
          <?php echo $form['pic2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pic3']->renderLabel() ?></th>
        <td>
          <?php echo $form['pic3']->renderError() ?>
          <?php echo $form['pic3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pic4']->renderLabel() ?></th>
        <td>
          <?php echo $form['pic4']->renderError() ?>
          <?php echo $form['pic4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['pic5']->renderLabel() ?></th>
        <td>
          <?php echo $form['pic5']->renderError() ?>
          <?php echo $form['pic5'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['item1']->renderLabel() ?></th>
        <td>
          <?php echo $form['item1']->renderError() ?>
          <?php echo $form['item1'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['item2']->renderLabel() ?></th>
        <td>
          <?php echo $form['item2']->renderError() ?>
          <?php echo $form['item2'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['item3']->renderLabel() ?></th>
        <td>
          <?php echo $form['item3']->renderError() ?>
          <?php echo $form['item3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['item4']->renderLabel() ?></th>
        <td>
          <?php echo $form['item4']->renderError() ?>
          <?php echo $form['item4'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['item5']->renderLabel() ?></th>
        <td>
          <?php echo $form['item5']->renderError() ?>
          <?php echo $form['item5'] ?>
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
        <th><?php echo $form['shopcomment']->renderLabel() ?></th>
        <td>
          <?php echo $form['shopcomment']->renderError() ?>
          <?php echo $form['shopcomment'] ?>
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
        <th><?php echo $form['timeup']->renderLabel() ?></th>
        <td>
          <?php echo $form['timeup']->renderError() ?>
          <?php echo $form['timeup'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['icons_list']->renderLabel() ?></th>
        <td>
          <?php echo $form['icons_list']->renderError() ?>
          <?php echo $form['icons_list'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
