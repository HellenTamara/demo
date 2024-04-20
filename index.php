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
      'name' => 'Pride and Prejudice',
      'year' => '1813',
      'author' => 'Jane Austen',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'Sense and Sensibility',
      'year' => '1811',
      'author' => 'Jane Austen',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'Emma',
      'year' => '1816',
      'author' => 'Jane Austen',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'The little prince',
      'year' => '1943',
      'author' => ' Antoine de Saint-Exupéry',
      'purchaseURL' => 'http://example.com'
    ]
  ];

  function filterByAuthor($books, $author)
  {
    $filteredList = [];
    foreach ($books as $book) {
      if ($book['author'] === $author) {
        $filteredList[] = $book;
      }
    }
    return $filteredList;
  }

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
    <?php foreach (filterByAuthor($books, 'Jane Austen') as $book) { ?>
        <li>
          <a href="<?= $book['purchaseURL'] ?>">
            <?= $book['name'] ?> <?= $book['year'] ?>
          </a>
        </li>
    <?php } ?>
  </ul>
</body>

</html>
