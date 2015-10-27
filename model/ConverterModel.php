<?php

/*
 * @author Nick Lashinski
 */

namespace model;

class ConverterModel {

    public function __construct() {
        
    }

    //the number of decimal places to round the results to
    private $answerDigits = 2;

    /**
     * Does the conversion that the user selected with user input
     * 
     * @param $conversion user input
     * @param String $selectedOperations contains a number based on selected operations
     * 1 - fahrenheit To Celsius
     * 2 - celsius To Fahrenheit
     * 3 - miles To Kilometers
     * 4 - kilometers To Miles
     * 5 - inches To Centemeters
     * 6 - centemeters To Inches
     * 7 - pounds To Kilograms
     * 8 - kilograms To Pounds
     * 
     * @return the result or a blank string for inproper input
     */
    public function doConversion($selectedOperations, $conversion) {
        if ($conversion == "") {
            return "";
        } else if (!is_numeric($conversion)) {
            return "";
        } else if (strlen($selectedOperations) > 1) {
            return "";
        } else if ($selectedOperations == "") {
            return "";
        } else if ($selectedOperations == "1") {
            return round((($conversion - 32) * (5 / 9)), $this->answerDigits);
        } else if ($selectedOperations == "2") {
            return round(($conversion * (9 / 5) + 32), $this->answerDigits);
        } else if ($selectedOperations == "3") {
            return round(($conversion * 1.609344), $this->answerDigits);
        } else if ($selectedOperations == "4") {
            return round(($conversion * .62137119), $this->answerDigits);
        } else if ($selectedOperations == "5") {
            return round(($conversion * 2.54), $this->answerDigits);
        } else if ($selectedOperations == "6") {
            return round(($conversion * .3937), $this->answerDigits);
        } else if ($selectedOperations == "7") {
            return round(($conversion * .45359237), $this->answerDigits);
        } else if ($selectedOperations == "8") {
            return round(($conversion * 2.2046223), $this->answerDigits);
        } else {
            return "";
        }
    }

}
