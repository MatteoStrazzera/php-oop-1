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