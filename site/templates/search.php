<?php snippet('header') ?>

<div class="search">
  <form class="search__form">
    <input class="search__input" type="search" name="q" value="<?= html($query) ?>">
    <input class="search__btn" type="submit" value="<?= t('search') ?>">
  </form>
  <?php foreach ($results as $result): ?>
      <a class="card__link" href="<?= $result->url() ?>">
        <div class="card__item">
          <?php if($image = $result->cover()->toFile()): ?>
            <img class="card__image" src="<?= $image->placeholderUri() ?>" data-src="<?= $image->url() ?>" data-lazyload alt="<?= $image->alt() ?>">
          <?php endif ?>
            <div class="card__text"><?= $result->metadescription()->kirbytext() ?></div>
        </div>
      </a>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>
