<?php
class GuilMaster
{
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance(): GuilMaster
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
}

$guildMaster1 = GuilMaster::getInstance();
$guildMaster2 = guilMaster::getInstance();
var_dump($guildMaster1 === $guildMaster2);
