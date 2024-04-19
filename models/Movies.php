<?php

class Movies extends Production
{

    public $profits;
    public $duration;

    public function __construct(string $title, string $language, int $rating, int $profits, int $duration)
    {
        parent::__construct($title, $language, $rating);
        $this->profits = $profits;
        $this->duration = $duration;
    }
}
