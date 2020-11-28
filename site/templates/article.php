<?php snippet('header') ?>

<article class="article">
  <h1 class="article__headline"><?= $page->title()->html() ?></h1>

  <?= $page->text()->blocks() ?>
  <?php snippet('socialshare') ?>

  <?php commentions('grouped') ?>
  <?php commentions('form') ?>
</article>


<?php snippet('footer') ?>

