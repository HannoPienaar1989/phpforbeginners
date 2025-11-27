<?php
$books = [[
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Phillip k. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'www.example.com'
],[
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'www.example.com'
],[
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'www.example.com'
]];

$filtredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});


require "index.view.php";