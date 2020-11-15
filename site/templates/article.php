<?php snippet('header') ?>
<?php snippet('mainnav') ?>

<section class="content article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->intro()->kirbytext() ?>
    <?= $page->text()->blocks() ?>

     <time datetime="<?= $page->published()->toDate('c') ?>" pubdate="pubdate">
      <?= $page->published()->toDate('d.m.Y H:i') ?>
    </time>


    <a href="<?= url('blog') ?>">Back…</a>
    <ul class="tags">
      <?php foreach($page->tags() as $tag): ?>
        <li>
          <a href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
            <?= html($tag) ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </article>

  <?php if($author = $page->author()->toUser()): ?>
    <aside class="author">

      <h1><?= $author->name() ?></h1>

      <?php if($avatar = $author->avatar()): ?>
        <figure>
          <img src="<?= $avatar->url() ?>">
        </figure>
      <?php endif ?>

      <?= $author->bio()->kirbytext() ?>

      <h2>On the web:</h2>

      <ul>
        <li><a href="<?= $author->github() ?>">Github</a></li>
        <li><a href="<?= $author->twitter() ?>">Twitter</a></li>
      </ul>

    </aside>
  <?php endif ?>

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
