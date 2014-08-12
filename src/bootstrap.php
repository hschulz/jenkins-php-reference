<?php

/*
 * Name:     bootstrap.php (UTF-8)
 * Author:   Hauke Schulz <hauke27@googlemail.com>
 * Date:     2012-10-18
 * Language: PHP 5.4
 * IDE:      Netbeans 7.2
 *
 * Description:
 * ------------
 *
 * This is an example implementation of the PSR-0 autoloader.
 *
 * https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
 */

/**
 *
 *
 * @author Hauke Schulz <hauke27@googlemail.com>
 * @license http://www.opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @param string $className
 * @return boolean
 */
function example_autoloader($className) {

    $isLoaded = false;

    $className = ltrim($className, '\\');

    $file  = '';
    $class = '';
    $namespace = '';

    if (($pos = strripos($className, '\\')) !== false) {
        $namespace = substr($className, 0, $pos);
        $class = substr($className, $pos + 1);
        $file  = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $file .= str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';

    if (is_file($file)) {
        require_once $file;
        $isLoaded = true;
    }


    return $isLoaded;
}

spl_autoload_register('example_autoloader');
