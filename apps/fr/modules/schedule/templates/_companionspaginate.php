  <?php if ($pager->haveToPaginate()): ?>
    <div class="pagination">
      <?php echo link_to(image_tag('/images/common/first.gif', array('alt'=>'First page')), url_for($Route.'?module=companion&action=index&page=1')) ?>
      <?php echo link_to(image_tag('/images/common/previous.gif', array('alt'=>'Previous page')), url_for($Route.'?module=companion&action=index&page='.$pager->getPreviousPage())) ?>

      <?php foreach ($pager->getLinks() as $page): ?>
        <?php if ($page == $pager->getPage()): ?>
          <?php echo $page ?>
        <?php else: ?>
          <?php echo link_to($page, url_for($Route.'?module=companion&action=index&page='.$page)) ?>
        <?php endif; ?>
      <?php endforeach; ?>

      <?php echo link_to(image_tag('/images/common/next.gif', array('alt'=>'Next page')), url_for($Route.'?module=companion&action=index&page='.$pager->getNextPage())) ?>
      <?php echo link_to(image_tag('/images/common/last.gif', array('alt'=>'Last page')), url_for($Route.'?module=companion&action=index&page='.$pager->getLastPage())) ?>
    </div>
  <?php endif; ?>
