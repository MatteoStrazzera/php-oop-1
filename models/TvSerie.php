<?php

class TvSerie
{

    public $totalSeason;

    public function __construct(int $totalSeason)
    {
        $this->totalSeason = $totalSeason;
    }
}
