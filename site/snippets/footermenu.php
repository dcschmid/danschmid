<?php $menus = $site->footermenu()->toStructure(); ?>
<?php if ($menus->isNotEmpty()) : ?>
  <?php foreach ($menus as $menu) : ?>

    <?php $menuItems = $menu->menuItems()->toPages(); ?>
    <?php if ($menuItems->isNotEmpty()) : ?>
    <nav class="footer-menu">
      <ul>
        <?php foreach ($menuItems as $menuItem) : ?>
          <li><a href="<?= $menuItem->url() ?>"><?= $menuItem->title() ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>
    <?php endif ?>

  <?php endforeach ?>
<?php endif ?>
