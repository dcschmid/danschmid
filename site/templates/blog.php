<?php snippet('header') ?>

  <div class="cards">
    <?php
      foreach( $articles as $article):
        snippet('article', ['article' => $article]);
      endforeach
    ?>
  </div>

  <?php
    snippet('pagination', ['pagination' => $pagination]);
  ?>

<?php snippet('footer') ?>
