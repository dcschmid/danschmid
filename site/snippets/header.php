<html lang="<?= $kirby->language() ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $page->metaTags() ?>
    <?= $page->headLinkAlternates(); ?>
    <?= mix('/css/main.css') ?>
    <?= snippet('matomo'); ?>
    <?=commentions('endpoints'); ?>

    <link rel="me" href="https://twitter.com/dcschmid1">
    <link rel="me" href="https://github.com/dcschmid">
    <link rel="alternate" type="application/rss+xml" title="Latest articles" href="<?= site()->url() ?>/feed"/>
  </head>
  <body>
    <?php snippet('svgsprite') ?>
    <header class="nav-wrapper">
      <?php snippet('mainnav') ?>
    </header>
    <main class="main-body">
    <?php commentions('feedback') ?>
