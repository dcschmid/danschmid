<div class="related">
  <h2 class="related__headline">Related articles</h2>
  <?php foreach($related as $article): ?>
    <a class="related__link" href="<?= $article->url() ?>">
      <div class="related__item">
        <?php if($image = $article->cover()->toFile()): ?>
          <img class="related__image" src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>">
        <?php endif ?>
        <div class="related__right">
          <h3 class="related__title"><?= $article->title() ?></h3>
          <div class="related__text"><?= $article->metadescription()->kirbytext() ?></div>
        </div>
      </div>
    </a>
  <?php endforeach ?>
</div>
