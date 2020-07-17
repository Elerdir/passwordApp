<?php

function autoloader($class)
{
    if (mb_strpos($class, '\\') === false && preg_match('/Helper$/', $class)) // Není v namespace a končí na Helper
        $class = 'app\\helpers\\' . $class;
    elseif (mb_strpos($class, 'App\\') !== false)
        $class = 'a' . ltrim($class, 'A'); // Změní App na app
    else
        $class = 'vendor\\' . $class;
    $path = str_replace('\\', '/', $class) . '.php';
    if (!include('../' . $path))
        throw new Exception('Autoloader Error');
}

spl_autoload_register("autoloader");