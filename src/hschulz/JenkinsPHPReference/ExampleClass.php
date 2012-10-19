<?php

/*
 * Name:     ExampleClass.php (UTF-8)
 * Language: PHP 5.4
 * Date:     18.10.2012
 * Author:   Hauke Schulz
 * IDE:      Netbeans 7.2
 */

namespace hschulz\JenkinsPHPReference;

use hschulz\JenkinsPHPReference\ExampleInterface;

/**
 * (de) Beschreibung von ExampleClass<br/>
 * (en) Description of ExampleClass
 *
 * @author Hauke Schulz
 * @copyright 2012 by Remind Advertising Gmbh, Rottstr. 31, 44793 Bochum, Germany
 * @license http://creativecommons.org/licenses/by/3.0/
 * @version 1.0
 * @package
 * @subpackage
 */
class ExampleClass implements ExampleInterface {

    protected $iFirstNumber = 0;

    protected $iSecondNumber = 0;

    /**
     *
     * @author Hauke Schulz
     */
    public function __construct($iFirstNumber, $iSecondNumber) {
        $this->iFirstNumber = $iFirstNumber;
        $this->iSecondNumber = $iSecondNumber;
    }

    public function add() {
        return $this->iFirstNumber + $this->iSecondNumber;
    }

    public function divide() {
        return $this->iFirstNumber / $this->iSecondNumber;
    }

    public function multiply() {
        return $this->iFirstNumber * $this->iSecondNumber;
    }

    public function substract() {
        return $this->iFirstNumber - $this->iSecondNumber;
    }
}

?>
