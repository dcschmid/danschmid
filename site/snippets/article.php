<div class="cards__item">
  <article class="card">
    <?php if($image = $article->cover()->toFile()): ?>
      <?= $image->lazysrcset('breakpoints') ?>
    <?php endif ?>
    <h1 class="card__title"><?= $article->title()->html() ?></h1>
    <div class="card__body">
      <?= $article->metadescription()->kirbytext() ?>
    </div>
    <a class="card__cta" href="<?= $article->url() ?>"><?= t('readmore') ?></a>
  </article>
</div>
