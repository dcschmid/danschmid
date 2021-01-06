<?php snippet('header') ?>

<article class="article">
  <h1 class="article__headline"><?= $page->title()->html() ?></h1>

  <?= $page->text()->kt() ?>

  <?php if($author = $page->author()->toUser()): ?>
    <?php snippet('author', ['author' => $author]) ?>
  <?php endif ?>

  <?php snippet('socialshare') ?>

  <?php commentions('grouped') ?>
  <?php commentions('form') ?>
</article>


<?php snippet('footer') ?>

