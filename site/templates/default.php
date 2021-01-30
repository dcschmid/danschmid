<?php snippet('header') ?>

<article class="article">
  <h1 class="article__headline"><?= $page->title()->html() ?></h1>

  <?= $page->text()->kt() ?>


  <?php
    $related = $page->related()->toPages();
    if ($related->count() > 0):
  ?>
    <?php snippet('related', ['related' => $related]) ?>
  <?php endif ?>

</article>


<?php snippet('footer') ?>

