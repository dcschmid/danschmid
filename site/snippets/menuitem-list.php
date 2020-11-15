<ul>
  <?php foreach($kirby->languages() as $language): ?>
    <li class="nav__item" <?php e($kirby->language() == $language, ' class="active"') ?>>
      <a  class="nav__link" href="<?php e($page->content($language->code())->language() != $site->language($language->code()), page('blog')->url($language->code()), $page->url($language->code()))?>"><?php echo $language->code(); ?></a>
    </li>
  <?php endforeach ?>

  <?php foreach ($items as $item) : ?>

    <?php if ($pageLink = $item->pageLink()->toPage()) : ?>
      <li class="nav__item">
        <a class="nav__link" href="<?= $pageLink->url() ?>">
          <svg class="icon <?= $item->svgIcon() ?>">
            <use xlink:href="#<?= $item->svgIcon() ?>"></use>
          </svg>
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
</ul>
