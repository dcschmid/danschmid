<article class="card">
  <a class="card__link" href="<?= $article->url() ?>">
    <div class="card__item">
      <?php if($image = $article->cover()->toFile()): ?>
        <img class="card__image" src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>">
      <?php endif ?>
      <div class="card__text"><?= $article->metadescription()->kirbytext() ?></div>
    </div>
  </a>
</article>
