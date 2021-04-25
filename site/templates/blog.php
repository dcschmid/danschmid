<?php snippet('header') ?>

    <?php
      foreach( $articles as $article):
        snippet('article', ['article' => $article]);
      endforeach
    ?>

  <?php
    snippet('pagination', ['pagination' => $pagination]);
  ?>

<?php snippet('footer') ?>
