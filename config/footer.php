<?php 

class FooterLink
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
    new FooterLink("Characters", "/#"), 
    new FooterLink("Comics", "/#"),
    new FooterLink("Characters", "/#"),
    new FooterLink("Characters", "/#"),
    new FooterLink("Characters", "/#"),
    new FooterLink("Characters", "/#"),
    new FooterLink("Characters", "/#"),



];