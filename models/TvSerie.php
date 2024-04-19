<?php

class TvSerie extends Production
{

    public $totalSeason;

    public function __construct(string $title, string $language, int $rating, int $totalSeason)
    {
        parent::__construct($title, $language, $rating);
        $this->totalSeason = $totalSeason;
    }
}
