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
    <?php snippet('svgsprite') ?>
    <?php snippet('mainnav') ?>
