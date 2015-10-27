<?php

/*
 * @author Nick Lashinski
 */

namespace model;

class CalculatorModel {

    public function __construct() {
        
    }

    /**
     * Does the calculation the user selected with user input
     * 
     * @param String $selectedOperations contains symbols of the selected operation(s)
     * @param $operand1 user input
     * @param $operand2 user input
     * 
     * @return the result or blank string for inproper input
     */
    public function doCalculation($selectedOperations, $operand1, $operand2) {
        if ($operand1 == "" || $operand2 == "") {
            return "";
        } else if (!is_numeric($operand1) || !is_numeric($operand2)) {
            return "";
        } else if (strlen($selectedOperations) > 1) {
            return "";
        } else if ($selectedOperations == "") {
            return "";
        } else if ($selectedOperations == "+") {
            return $operand1 + $operand2;
        } else if ($selectedOperations == "-") {
            return $operand1 - $operand2;
        } else if ($selectedOperations == "x") {
            return $operand1 * $operand2;
        } else if ($selectedOperations == "/") {
            return $operand1 / $operand2;
        } else if ($selectedOperations == "%") {
            return $operand1 % $operand2;
        } else if ($selectedOperations == "^") {
            $result = 1;
            for ($i = 1; $i <= $operand2; $i++) {
                $result = $result * $operand1;
            }
            return $result;
        } else {
            return "";
        }
    }

}
