<?php

class Link
{

    public $text;
    public $url;


    public function __construct($_text, $_url)
    {
        $this->text = $_text;
        $this->url = $_url;
    }
}
return [
    new Link("Characters", "/#"),
    new Link("Movies", "/#"),
    new Link("Tv", "/#"),
    new Link("games", "/#"),
    new Link("Collectibles", "/#"),
    new Link("Videos", "/#"),
    new Link("Fans", "/#"),
    new Link("News", "/#"),
    new Link("Shop", "/#"),
];


