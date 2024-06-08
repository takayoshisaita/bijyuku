<?php use_helper('I18N', 'Date') ?>
<?php include_partial('topic/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('トピック一覧（2011.12.26 更新日ではなく作成日の新しい記事から順に表示するように変更しました。）', array(), 'messages') ?></h1>

  <?php include_partial('topic/flashes') ?>

  <span style="font-weight:bold;background-color:#FFFF00;">チェックボックスでトピックを選択後、下のプルダウンから「公開」「非公開」を選択→実行で一括公開・非公開ができます。</span>

  <div id="sf_admin_bar">
    <?php include_partial('topic/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('topic_collection', array('action' => 'batch')) ?>" method="post">
    <ul class="sf_admin_actions" style="float:none;">
      <?php include_partial('topic/list_actions', array('helper' => $helper)) ?>
    </ul>
    <?php include_partial('topic/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('topic/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('topic/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

</div>
