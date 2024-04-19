<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>

<body>
  <?php
  $books = [
    [
      'name' => 'Dark Matter',
      'year' => '2016',
      'author' => 'Philip K. Dick',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'Perdida',
      'year' => '2013',
      'author' => 'Carina Rissi',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'The little prince',
      'year' => '1943',
      'author' => ' Antoine de Saint-Exupéry',
      'purchaseURL' => 'http://example.com'
    ]
  ];
  ?>

  <ul>
    <?php foreach ($books as $book) { ?>
      <li>
        <a href="<?= $book['purchaseURL'] ?>">
          <?= $book['name'] ?> <?= $book['year'] ?>
        </a>
      </li>
    <?php } ?>
  </ul>
</body>

</html>
