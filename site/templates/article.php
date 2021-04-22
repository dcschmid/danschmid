<?php snippet('header') ?>

<article class="article">
  <h1 class="article__headline"><?= $page->title()->html() ?></h1>

  <?= t('updated') ?> <?= $page->modified('d.m.Y') ?>

  <?= $page->text()->kt() ?>

  <?php
    $related = $page->related()->toPages();
    if ($related->count() > 0):
  ?>
    <h2 class="related__headline"><?= t('relatedarticles') ?></h2>
    <?php snippet('related', ['related' => $related]) ?>
  <?php endif ?>

  <?php snippet('socialshare') ?>

  <?php commentions('form') ?>
  <?php commentions('grouped') ?>
</article>


<?php snippet('footer') ?>

