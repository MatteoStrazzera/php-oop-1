<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/db.php';

// var_dump($favMovie1, $favMovie2, $favMovie3);

echo ('Movie name: ' . $favMovie1->title . ' - Movie lang: ' . $favMovie1->language . ' - Movie rating: ' . $favMovie1->rating . ' / 10' . '<br>');
echo ('Movie name: ' . $favMovie2->title . ' - Movie lang: ' . $favMovie2->language . ' - Movie rating: ' . $favMovie2->rating . ' / 10' . '<br>');
echo ('Movie name: ' . $favMovie3->title . ' - Movie lang: ' . $favMovie3->language . ' - Movie rating: ' . $favMovie3->rating . ' / 10');

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container">
            <div class="row">

                <?php foreach ($productions as $production) : ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3><?php echo $production->title ?></h3>
                                </div>
                                <div class="language">
                                    Original Language: <?php echo $production->language ?>
                                </div>
                                <div class="rating">
                                    Rating: <?php echo $production->rating ?> / 10
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>