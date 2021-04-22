<div class="nav__list">
  <ul class="nav__left" role="navigation">
    <?php foreach ($items as $item) : ?>

      <?php if ($pageLink = $item->pageLink()->toPage()) : ?>
        <li class="nav__item">
          <a class="nav__link" href="<?= $pageLink->url() ?>">
            <span><?= $item->itemTitle()->or($pageLink->title()) ?></span>
          </a>
      <?php elseif ($item->externalLink()->isNotEmpty()) : ?>
        <li class="nav__item">
          <a class="nav__link" href="<?= $item->externalLink() ?>">
            <span><?= $item->itemTitle()->or(Url::short($item->externalLink()->value())) ?></span>
          </a>
      <?php endif ?>

      <?php $subMenuItems = $item->subMenu()->toStructure(); ?>

      <?php if ($item->hasSubmenu()->isTrue() && $subMenuItems->isNotempty()) : ?>
        <?php snippet('menuitem-list', ['items' => $subMenuItems]) ?>
      <?php endif ?>
      </li>
    <?php endforeach ?>

    <li class="nav__item">
      <a class="nav__link" href="http://buymeacoffee.com/danschmid">
        <?= t('supportme') ?>
      </a>
    </li>

    <?php foreach($kirby->languages() as $language): ?>
      <li class="nav__item <?php e($kirby->language() == $language, 'active') ?>">
        <a class="nav__link" href="<?php e($page->content($language->code())->language() != $site->language($language->code()), $page->url($language->code()))?>">
          <?php echo $language->code(); ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
  <div class="nav__right"></div>
</div>
