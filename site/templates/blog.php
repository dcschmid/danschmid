<?php snippet('header') ?>

<main class="main-body">

  <?php
    foreach( $articles as $article):
      snippet('article', ['article' => $article]);
    endforeach
  ?>

  <!-- pagination -->
  <?php snippet('pagination', ['pagination' => $pagination]); ?>
</main>

<?php snippet('footer') ?>
