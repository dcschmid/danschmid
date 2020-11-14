<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->intro()->kirbytext() ?>
    <?= $page->text()->blocks() ?>

     <time datetime="<?= $page->published()->toDate('c') ?>" pubdate="pubdate">
      <?= $page->published()->toDate('d.m.Y H:i') ?>
    </time>


    <a href="<?= url('blog') ?>">Back…</a>

  </article>

  <?php if ($page->hasPrev()): ?>
    <a href="<?= $page->prev()->url() ?>">previous page</a>
  <?php endif ?>

  <?php if ($page->hasNext()): ?>
    <a href="<?= $page->next()->url() ?>">next page</a>
  <?php endif ?>

<?php
$related = $page->related()->toPages();
if ($related->count() > 0):
?>
  <h2>Related</h2>
  <ul>
    <?php foreach($related as $article): ?>
    <li>
      <a href="<?= $article->url() ?>">
        <?= $article->title() ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>
</section>

<?php snippet('footer') ?>
