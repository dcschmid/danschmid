<div class="related">
  <?php foreach($related as $article): ?>
    <a class="related__link" href="<?= $article->url() ?>">
      <div class="related__item">
        <?php if($image = $article->cover()->toFile()): ?>
          <img class="related__image" src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>">
        <?php endif ?>
        <div class="related__text"><?= $article->metadescription()->kirbytext() ?></div>
      </div>
    </a>
  <?php endforeach ?>
</div>
