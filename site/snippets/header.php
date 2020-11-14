<html>
  <head>
    <title><?= $site->title() ?></title>
    <?php echo mix('/css/main.css') ?>
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
