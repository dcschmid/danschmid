<div class="author">
  <?php if($avatar = $author->avatar()): ?>
    <div class="author__image">
      <img src="<?= $avatar->url() ?>" alt="<?= $author->name() ?>">
    </div>
  <?php endif ?>

  <div class="author__bio">
    <div class="author__name"><?= $author->name() ?></div>

    <div class="author__text"><?= $author->bio()->kirbytext() ?></div>

    <div class="author__links">
      Folgt mir:
      <a href="<?= $author->twitter() ?>">Twitter</a>
      <a href="<?= $author->github() ?>">Github</a>
    </div>
  </div>
</div>
