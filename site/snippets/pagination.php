<?php if ($pagination->hasPages()): ?>
  <nav class="pagination">
    <?php if ($pagination->hasPrevPage()): ?>
    <a class="pagination__link" href="<?= $pagination->prevPageURL() ?>">
     <?= t('newerpost') ?>
    </a>
    <?php endif ?>

    <?php if ($pagination->hasNextPage()): ?>
    <a class="pagination__link" href="<?= $pagination->nextPageURL() ?>">
      <?= t('olderpost') ?>
    </a>
    <?php endif ?>
  </nav>
<?php endif ?>
