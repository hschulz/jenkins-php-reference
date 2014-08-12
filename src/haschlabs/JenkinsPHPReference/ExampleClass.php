<?php

/*
 * Name:     ExampleClass.php (UTF-8)
 * Language: PHP 5.4
 * Date:     2012-10-18
 * Author:   Hauke Schulz <hauke27@googlemail.com>
 * IDE:      Netbeans 7.2
 */

namespace haschlabs\JenkinsPHPReference;

use haschlabs\JenkinsPHPReference\ExampleInterface;

/**
 * Description of ExampleClass
 *
 * @author Hauke Schulz <hauke27@googlemail.com>
 * @license http://www.opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @version 1.0
 */
class ExampleClass implements ExampleInterface {

    protected $firstNumber = 0;

    protected $secondNumber = 0;

    /**
     *
     * @author Hauke Schulz
     */
    public function __construct($firstNumber, $secondNumber) {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function add() {
        return $this->firstNumber + $this->secondNumber;
    }

    public function divide() {
        return $this->firstNumber / $this->secondNumber;
    }

    public function multiply() {
        return $this->firstNumber * $this->secondNumber;
    }

    public function substract() {
        return $this->firstNumber - $this->secondNumber;
    }
}
