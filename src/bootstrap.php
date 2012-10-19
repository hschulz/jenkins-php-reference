<?php

/*
 * Name:     index.php (UTF-8)
 * Author:   Hauke Schulz <hauke27@googlemail.com>
 * Date:     2012-10-18
 * Language: PHP 5.4
 * IDE:      Netbeans 7.2
 *
 * Description:
 * ------------
 *
 * (de) Das ist eine Beispielinstallation des PSR-0 Autoloaders.
 * (en) This is an example implementation of the PSR-0 autoloader.
 *
 * https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
 */

/**
 * (de)<br/>
 * (en)
 *
 * @author Hauke Schulz <hauke27@googlemail.com>
 * @param string $sClassName
 * @return boolean
 */
function example_autoloader($sClassName) {

    $bIsLoaded = false;

    $sClassName = ltrim($sClassName, '\\');

    $sFile  = '';
    $sClass = '';
    $sNamespace = '';

    if (($iPos = strripos($sClassName, '\\')) !== false) {
        $sNamespace = substr($sClassName, 0, $iPos);
        $sClass = substr($sClassName, $iPos + 1);
        $sFile  = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $sNamespace) . DIRECTORY_SEPARATOR;
    }

    $sFile .= str_replace('_', DIRECTORY_SEPARATOR, $sClass) . '.php';

    if (is_file($sFile)) {
        require_once $sFile;
        $bIsLoaded = true;
    }


    return $bIsLoaded;
}

spl_autoload_register('example_autoloader');

?>
