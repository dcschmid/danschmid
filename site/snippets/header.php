<html lang="<?= $kirby->language() ?>">
  <head>
    <title><?= $site->title() ?></title>
    <?php echo mix('/css/main.css') ?>
    <?php snippet('matomo'); ?>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <?php foreach ($pages as $child): ?>
          <li><?= $child->title()->link() ?></li>
          <?php endforeach ?>
        </ul>
      </nav>
    </header>
    <?php snippet('mainnav') ?>
