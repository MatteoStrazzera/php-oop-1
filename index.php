<?php

class Production
{
    public $title;
    public $language;
    public $rating;
}

$favMovie1 = new Production();

$favMovie1->title = 'Nuovo Cinema Paradiso';
$favMovie1->language = 'Italian';
$favMovie1->rating = 10;

$favMovie2 = new Production();

$favMovie2->title = 'The Hateful Eight';
$favMovie2->language = 'English';
$favMovie2->rating = 8;

$favMovie3 = new Production();

$favMovie3->title = 'Gangs of New York';
$favMovie3->language = 'English';
$favMovie3->rating = 9;

var_dump($favMovie1, $favMovie2, $favMovie3);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>