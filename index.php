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
      'author' => 'Philip K. Dick',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'Perdida',
      'author' => 'Carina Rissi',
      'purchaseURL' => 'http://example.com'
    ],
    [
      'name' => 'The little prince',
      'author' => ' Antoine de Saint-Exupéry',
      'purchaseURL' => 'http://example.com'
    ]
  ];
  ?>

  <ul>
    <?php foreach ($books as $book) { ?>
      <li>
        <a href="<?= $book['purchaseURL'] ?>">
          <?= $book['name'] ?>
        </a>
      </li>
    <?php } ?>
  </ul>
</body>

</html>

<% books each do |book| %>
<li>
<a href="<%= book['purchaseURL'] %>">
          <?= $book['name'] ?>
        </a>
</li>
<% end %>
