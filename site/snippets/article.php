<div class="cards__item">
  <article class="card">
    <?php if($image = $article->cover()->toFile()): ?>
      <img src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>">
    <?php endif ?>
    <div class="card__body">
      <?= $article->metadescription()->kirbytext() ?>
    </div>
    <a class="card__cta" href="<?= $article->url() ?>"><?= t('readmore') ?></a>
    <ul class="tags">
      <?php foreach($article->tags()->split() as $tag): ?>
      <li>
        <a class="tags__button" href="<?= url($page->url(), ['params' => ['tag' => $tag]]) ?>">
          <?= html($tag) ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </article>
</div>
