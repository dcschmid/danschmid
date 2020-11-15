<?php

return function ($page) {

    $tag = urldecode($page->slug());
    $articles = page('blog')->children()->filterBy('tags', $tag, ',');

    return [
        'articles' => $articles,
        'tag'      => $tag
    ];

};
