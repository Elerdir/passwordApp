<?php

class Settings
{
    public static $debug = true;
    public static $domain = 'application';
    public static $db = array(
        'user' => "root",
        'host' => "http://www.niderle.cz/phpMyAdmin",   // pokud nebude fungovat, tak to doladíme
        'password' => "Ladislav.88",
        'database' => "application",
    );
    public static $email = 'admin@application.cz'; // toto je jenom dočasně

}