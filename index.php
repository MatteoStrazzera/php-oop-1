<?php

class Production
{
    public $title;
    public $language;
    public $rating;

    public function __construct(string $title, string $language, int $rating)
    {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }
}

$favMovie1 = new Production('Nuovo Cinema Paradiso', 'Italian', 10);

$favMovie2 = new Production('The Hateful Eight', 'English', 8);

$favMovie3 = new Production('Gangs of New York', 'English', 9);

var_dump($favMovie1, $favMovie2, $favMovie3);

echo ('Movie name: ' . $favMovie1->title . ' - Movie lang: ' . $favMovie1->language . ' - Movie rating: ' . $favMovie1->rating . ' / 10' . '<br>');
echo ('Movie name: ' . $favMovie2->title . ' - Movie lang: ' . $favMovie2->language . ' - Movie rating: ' . $favMovie2->rating . ' / 10' . '<br>');
echo ('Movie name: ' . $favMovie3->title . ' - Movie lang: ' . $favMovie3->language . ' - Movie rating: ' . $favMovie3->rating . ' / 10');

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