<?php

/*
 * @author Nick Lashinski
 */

namespace model;

class CalculatorModel {

    public function __construct() {
        
    }

    /**
     * 
     * @param String $selectedOperations contains symbols of the selected operation(s)
     */
    public function doCalculation($selectedOperations, $operand1, $operand2) {
        if ($operand1 == "" || $operand2 == "") {
            return "";
        } else if (!is_numeric($operand1) || !is_numeric($operand2)) {
            return "";
        }else if (strlen($selectedOperations) > 1){
            return "";
        }else if ($selectedOperations == ""){
            return "";
        }else if($selectedOperations == "+"){
            return $operand1 + $operand2;
        }else if($selectedOperations == "-"){
            return $operand1 - $operand2;
        }else if($selectedOperations == "x"){
            return $operand1 * $operand2;
        }else if($selectedOperations == "/"){
            return $operand1 / $operand2;
        }else if($selectedOperations == "%"){
            return $operand1 % $operand2;
        }
    }

}
