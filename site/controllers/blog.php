<?php

return function($page) {

  // fetch the basic set of pages
  $articles = page('blog')->children()->listed()->flip()->filter(function ($child) {
    return $child->content(kirby()->language()->code())->text()->isNotEmpty();
  })->paginate(10);

  // fetch all tags
  $tags = $articles->pluck('tags', ',', true);

  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }

  // apply pagination
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'pagination');
};
