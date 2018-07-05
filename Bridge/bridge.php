<?php

interface WebSite
{
    public function __construct(Theme $theme);
    public function getContent();
}

class Portfolio implements Website
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'About Page' . $this->theme->getColor();
    }
}

class Contacts implements WebSite
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return 'Contacts page' . $this->theme->getColor();
    }
}

interface Theme
{
    public function getColor();
}

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Theme';
    }
}

class LigthTheme implements Theme
{
    public function getColor()
    {
        return 'LigthTheme';
    }
}

$darkTheme = new DarkTheme();
var_dump($darkTheme);
$portfolio = new Portfolio($darkTheme);
$contacts = new Contacts($darkTheme);

print_r($portfolio->getContent());
print_r($contacts->getContent());
