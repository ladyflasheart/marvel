<?php
/**
 * Autoloader from the Marvel Package
 */

function autoloadMarvel($class)
{
    $pathArray = explode('_', strtolower($class));
    $file = ucfirst(array_pop($pathArray));
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $pathArray)
        . DIRECTORY_SEPARATOR . $file . '.php';

    if (is_readable($filePath)) {

        include_once $filePath;
    }
}
