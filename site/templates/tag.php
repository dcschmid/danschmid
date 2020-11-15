<?php snippet('header') ?>
<?php if ($articles->isNotEmpty()) : ?>
    <?php foreach ($articles as $article) : ?>
      <article>
        <h1><?= $article->title()->html() ?></h1>
        <?= $article->published()->toDate('d.m.Y') ?>
        <?= $article->intro()->kirbytext() ?>
        <a href="<?= $article->url() ?>">Read more…</a>
      </article>
    <?php endforeach ?>
<?php else : ?>
    <div>No results for tag <?= $tag ?></div>
<?php endif ?>
<?php snippet('footer') ?>
