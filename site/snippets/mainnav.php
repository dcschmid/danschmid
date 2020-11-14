<?php $items = $site->nestedMenu()->toStructure() ?>
<?php if ($items->isNotEmpty()) : ?>
<div class="nav__bar">
    <div class="nav__logo">
        <a href="/">Danschmid</a>
    </div>
    <div class="nav__menuicon">Menu</div>
</div>
<nav class="nav__main">
  <div class="nav__center">
      <div class="nav__logo--desktop">
          <a href="/">Danschmid</a>
      </div>
      <?php snippet('menuitem-list', ['items' => $items]) ?>
  </div>
</nav>
<?php endif ?>
