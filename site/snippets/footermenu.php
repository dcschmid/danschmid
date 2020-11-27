<?php $menus = $site->footermenu()->toStructure(); ?>
<?php foreach ($menus as $menu) : ?>
  <?php $menuItems = $menu->menuItems()->toPages(); ?>
  <?php if ($menuItems->isNotEmpty()) : ?>
      <?php foreach ($menuItems as $menuItem) : ?>
        <a class="footer__link" href="<?= $menuItem->url() ?>"><?= $menuItem->title() ?></a>
      <?php endforeach ?>
  <?php endif ?>
<?php endforeach ?>
