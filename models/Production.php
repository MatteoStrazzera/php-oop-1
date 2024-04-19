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
