<div class="socialshare">
  <a class="socialshare__link socialshare__facebook" aria-label="Facebook share" href="https://www.facebook.com/sharer/sharer.php?u=<?= $page->url(); ?>" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    <svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg><span> facebook</span>
  </a>

  <a class="socialshare__link socialshare__twitter" aria-label="Twitter share" href="https://twitter.com/intent/tweet?text=<?= $page->title(); ?>&url=<?= $page->url(); ?>" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
    <svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg><span> twitter</span>
  </a>

  <a class="socialshare__link socialshare__reddit" aria-label="Reddit share" href="http://www.reddit.com/submit?url=<?= $page->url(); ?>" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" >
    <svg class="icon icon-reddit"><use xlink:href="#icon-reddit"></use></svg><span> reddit</span>
  </a>

  <a class="socialshare__link socialshare__linkedin" aria-label="Linkedin share" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $page->url(); ?>&title=<?= $page->title(); ?>&summary={{ page.desc }}&source=webjeda" onclick="window.open(this.href, 'mywin',
    'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" >
    <svg class="icon icon-linkedin2"><use xlink:href="#icon-linkedin2"></use></svg><span> linkedin</span>
  </a>

  <a class="socialshare__link socialshare__email" aria-label="E-Mail share" href="mailto:?subject={<?= $page->title(); ?>&amp;body=Check out this site <?= $page>url(); ?>">
    <svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg><span> email</span>
  </a>
</div>
