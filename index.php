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


$bussiness = [
    'name' => 'Laracast',
    'cost' => 15,
    'categories' => ["Testing","PHP","Javascript"]
];

$user = [];

if($bussiness['cost'] > 99) {

}

foreach ($bussiness['categories'] as $category) {
    echo $category . "<br>";
}

funtion register($user){
//create user record in db.
//log user in.
//send welcome message.
//redirect to there new dashboard.
}


$filtredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});


require "index.view.php";
