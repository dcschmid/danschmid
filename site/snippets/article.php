<article>
  <h2 id="headline"><?= $article->title()->html() ?></h2>
  <div class="post-meta">
    <div>
      <?= $article->date()->toDate('d.m.Y H:i') ?>
    </div>
    <div>
      <?= $article->author()->toUser()->name() ?>
    </div>
    <div>
        <?php foreach($article->tags() as $tag): ?>
          <a href="<?= url('/', ['params' => ['tag' => $tag]]) ?>">
            <?= html($tag) ?>
          </a>
        <?php endforeach ?>
    </div>
  </div>
  <?= $article->intro()->kirbytext() ?>
  <a href="<?= $article->url() ?>">Read more…</a>
</article>
