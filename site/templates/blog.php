<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog">

  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($articles as $article): ?>

    <article>
      <h1><?= $article->title()->html() ?></h1>
      <?= $article->published()->toDate('d.m.Y') ?>
      <?= $article->intro()->kirbytext() ?>
      <a href="<?= $article->url() ?>">Read more…</a>
    </article>

  <?php endforeach ?>


  <!-- sidebar with tagcloud -->
<aside>
  <h1>Tags</h1>
  <ul class="tags">
    <?php foreach($tags as $tag): ?>
    <li>
      <a href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
        <?= html($tag) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</aside>

<!-- pagination -->
<nav class="pagination">
  <?php if($pagination->hasPrevPage()): ?>
  <a href="<?= $pagination->prevPageUrl() ?>">previous posts</a>
  <?php endif ?>

  <?php if($pagination->hasNextPage()): ?>
  <a href="<?= $pagination->nextPageUrl() ?>">next posts</a>
  <?php endif ?>
</nav>

</section>

<?php snippet('footer') ?>
