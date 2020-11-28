<?php $items = $site->nestedMenu()->toStructure() ?>
<nav class="nav">
  <div class="nav__logo">
    <img  class="nav__img" src="/assets/Daniel-transparant-90px.png" alt="Bild von Daniel Schmid" />
    <a class="nav__link--name" href="/">Danschmid</a>
  </div>

  <button class="nav__toggle" type="button">
    Menu
  </button>

    <?php snippet('menuitem-list', ['items' => $items]) ?>
</nav>
