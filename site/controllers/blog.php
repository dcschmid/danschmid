<?php

return function($page, $tag) {

  // fetch the basic set of pages
  $articles = $page->children()->listed()->flip()->paginate(10);

  // fetch all tags
  $tags = $articles->pluck('tags', ',', true);

  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }

  // apply pagination
  $articles   = $articles->paginate(10);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'pagination');

};
