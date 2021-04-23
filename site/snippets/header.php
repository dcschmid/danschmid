<html lang="<?= $kirby->language() ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-title" content="Danschmid">
    <meta name="application-name" content="Danschmid">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
    <meta name="google-site-verification" content="4bmLFItjVQHupItFYJ7ex2qn1BkLf9GxQXBq_HTiOcU" />
    <?= $page->metaTags() ?>
    <?= $page->headLinkAlternates(); ?>
    <?= mix('/css/main.css') ?>
    <?= snippet('matomo'); ?>

    <link rel="me" href="https://twitter.com/dcschmid1">
    <link rel="me" href="https://github.com/dcschmid">
    <link rel="webmention" href="https://webmention.io/danschmid.de/webmention" />
    <link rel="pingback" href="https://webmention.io/danschmid.de/xmlrpc" />
    <link rel="alternate" type="application/rss+xml" title="Latest articles" href="<?= site()->url() ?>/feed"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
  </head>
  <body>
    <?php snippet('svgsprite') ?>
    <header class="nav-wrapper">
      <?php snippet('mainnav') ?>
    </header>
    <main class="main-body">
