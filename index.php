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
      'year' => 2016,
      'author' => 'Philip K. Dick',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'Pride and Prejudice',
      'year' => 1813,
      'author' => 'Jane Austen',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'Sense and Sensibility',
      'year' => 1811,
      'author' => 'Jane Austen',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'Emma',
      'year' => 1816,
      'author' => 'Jane Austen',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'The little prince',
      'year' => 1943,
      'author' => ' Antoine de Saint-Exupéry',
      'purchaseURL' => 'http://example.com'
    ]
  ];

  // Regular Function
  function filterRegular($items, $key, $value)
  {
    $filteredList = [];
    foreach ($items as $item) {
      if ($item[$key] === $value) {
        $filteredList[] = $item;
      }
    }
    return $filteredList;
  }


  // Lambda Function
  // function filterLambda($items, $fn)
  // {
  //   $filteredList = [];
  //   foreach ($items as $item) {
  //     if ($fn($item)) {
  //       $filteredList[] = $item;
  //     }
  //   }
  //   return $filteredList;
  // }

  // $filteredBooks = filterLambda($books, function ($book) {
  //   return $book['year'] < 2000;
  // });


  // Built in array filter
  $filteredBooks = array_filter($books, function ($book) {
    return $book['year'] < 2000;
  });

  ?>

  <h3>Unfiltered List</h3>
  <ul>
    <?php foreach ($books as $book) { ?>
      <li>
        <a href="<?= $book['purchaseURL'] ?>">
          <?= $book['name'] ?> <?= $book['year'] ?>
        </a>
      </li>
    <?php } ?>
  </ul>

  <h3>Filtered List (Jane Austen)</h3>
  <ul>
    <?php foreach (filterRegular($books, 'author', 'Jane Austen') as $book) { ?>
      <li>
        <a href="<?= $book['purchaseURL'] ?>">
          <?= $book['name'] ?> <?= $book['year'] ?>
        </a>
      </li>
    <?php } ?>
  </ul>

  <h3>Filtered List by Year</h3>
  <ul>
    <?php foreach ($filteredBooks as $book) { ?>
      <li>
        <a href="<?= $book['purchaseURL'] ?>">
          <?= $book['name'] ?> <?= $book['year'] ?>
        </a>
      </li>
    <?php } ?>
  </ul>
</body>

</html>
