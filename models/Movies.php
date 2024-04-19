<?php

class Movies
{

    public $profits;
    public $duration;

    public function __construct(int $profits, int $duration)
    {
        $this->profits = $profits;
        $this->duration = $duration;
    }
}
