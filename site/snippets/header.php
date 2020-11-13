<html>
  <head>
    <title><?= $site->title() ?></title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <?php foreach ($pages as $child): ?>
          <li><?= $child->title()->link() ?></li>
          <?php endforeach ?>
        </ul>
      </nav>
    </header>
