<html lang="<?= $kirby->language() ?>">
  <head>
    <?= $page->metaTags() ?>
    <?= $page->headLinkAlternates(); ?>
    <?= mix('/css/main.css') ?>
    <?= snippet('matomo'); ?>
    <?php
      commentions('css');
      // within the <head> tags of a template or snippet
      commentions('endpoints');
    ?>
    <link rel="me" href="https://twitter.com/dcschmid1">
    <link rel="me" href="https://github.com/dcschmid">
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
