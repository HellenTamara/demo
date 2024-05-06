<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>

<body>
  <form action="cad.php" method="get">
    <label for="filter-by">Filter by:</label>
    <select name="filter-by">
      <option value="author">Author</option>
      <option value="year">Year</option>
      <option value="name">Name</option>
    </select>
    <label for="search">Search:</label>
    <input type="text" name="search" id="search-id">
    <input type="submit" value="Filter">
  </form>

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
  ?>

  <h3>Books List</h3>
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
