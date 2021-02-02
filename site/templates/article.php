<?php snippet('header') ?>

<article class="article">
  <h1 class="article__headline"><?= $page->title()->html() ?></h1>

  <?= t('publish') ?> <?= $page->date()->toDate('d.m.Y H:i') ?>

  <?= $page->text()->kt() ?>

  <?php
    $related = $page->related()->toPages();
    if ($related->count() > 0):
  ?>
    <h2 class="related__headline">Related articles</h2>
    <?php snippet('related', ['related' => $related]) ?>
  <?php endif ?>

  <?php snippet('socialshare') ?>

  <?php commentions('form') ?>
  <?php commentions('grouped') ?>
</article>


<?php snippet('footer') ?>

