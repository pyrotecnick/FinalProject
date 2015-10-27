<?php

/*
 * @author Nick Lashinski
 */

namespace view;

class ConverterView {

    /**
     * These names are used in $_POST
     * @var string
     */
    private static $fahrenheitToCelsius = "ConverterView::FahrenheitToCelsius";
    private static $celsiusToFahrenheit = "ConverterView::CelsiusToFahrenheit";
    private static $milesToKilometers = "ConverterView::MilesToKilometers";
    private static $kilometersToMiles = "ConverterView::KilometersToMiles";
    private static $inchesToCentemeters = "ConverterView::InchesToCentemeters";
    private static $centemetersToInches = "ConverterView::CentemetersToInches";
    private static $poundsToKilograms = "ConverterView::PoundsToKilograms";
    private static $kilogramsToPounds = "ConverterView::KilogramsToPounds";
    private static $input = "ConverterView::Input";
    private static $convert = "ConverterView::Convert";
    private static $resultID = "ConverterView::Result";
    private $result = "";

    /**
     * Sets result to a warning if input is invalid
     * @return the html for the calculator
     */
    public function doView() {
        if ($this->userWantsConversion() && $this->getInput() == "") {
            $this->result = "Please Enter a Number to Convert";
        } else if ($this->userWantsConversion() && !is_numeric($this->getInput())) {
            $this->result = "Input Must be a Number";
        } else if ($this->userWantsConversion() && $this->getSelectedOperations() == "") {
            $this->result = "Please Select an Operation";
        } else if ($this->userWantsConversion() && strlen($this->getSelectedOperations()) > 1) {
            $this->result = "Please Only Select One Operation";
        }

        //generate HTML
        return $this->generateConversionHTML($this->result);
    }

    /**
     * Checks if user has pressed the convert button
     * @return bool
     */
    public function userWantsConversion() {
        return isset($_POST[self::$convert]);
    }

    /**
     * Gets user input
     * @return string
     */
    public function getInput() {
        if (isset($_POST[self::$input]))
            return trim($_POST[self::$input]);
        return "";
    }

    /**
     * Used my Model to pass in the result
     * @param $result
     */
    public function saveResult($result) {
        $this->result = $result;
    }

    /**
     * Returns a string with a number for each selected operation
     * @return string
     */
    public function getSelectedOperations() {
        $selectedOperations = "";
        if (isset($_POST[self::$fahrenheitToCelsius])) {
            $selectedOperations .= "1";
        }
        if (isset($_POST[self::$celsiusToFahrenheit])) {
            $selectedOperations .= "2";
        }
        if (isset($_POST[self::$milesToKilometers])) {
            $selectedOperations .= "3";
        }
        if (isset($_POST[self::$kilometersToMiles])) {
            $selectedOperations .= "4";
        }
        if (isset($_POST[self::$inchesToCentemeters])) {
            $selectedOperations .= "5";
        }
        if (isset($_POST[self::$centemetersToInches])) {
            $selectedOperations .= "6";
        }
        if (isset($_POST[self::$poundsToKilograms])) {
            $selectedOperations .= "7";
        }
        if (isset($_POST[self::$kilogramsToPounds])) {
            $selectedOperations .= "8";
        }
        return $selectedOperations;
    }

    /**
     * Builds the HTML for the converter with the result of a sucsessful 
     * conversion or a warning for invalid input
     * @param $result
     * @return HTML
     */
    private function generateConversionHTML($result) {
        return "<form method='post' > 
				<fieldset>
					<legend>Enter Input, Select a Conversion, and Press Convert</legend>
					<label for='" . self::$input . "'>Input </label>
					<input type='text' id='" . self::$input . "' name='" . self::$input . "'/>
                                        </br>
                                        <label for='" . self::$fahrenheitToCelsius . "'>Fahrenheit To Celsius</label>
					<input type='checkbox' id='" . self::$fahrenheitToCelsius . "' name='" . self::$fahrenheitToCelsius . "'/>
                                        <label for='" . self::$celsiusToFahrenheit . "'>Celsius To Fahrenheit</label>
					<input type='checkbox' id='" . self::$celsiusToFahrenheit . "' name='" . self::$celsiusToFahrenheit . "'/>
                                        <label for='" . self::$poundsToKilograms . "'>Pounds To Kilograms</label>
					<input type='checkbox' id='" . self::$poundsToKilograms . "' name='" . self::$poundsToKilograms . "'/>
                                        <label for='" . self::$kilogramsToPounds . "'>Kilograms To Pounds</label>
					<input type='checkbox' id='" . self::$kilogramsToPounds . "' name='" . self::$kilogramsToPounds . "'/>
                                        </br>
                                        <label for='" . self::$milesToKilometers . "'>Miles To Kilometers</label>
					<input type='checkbox' id='" . self::$milesToKilometers . "' name='" . self::$milesToKilometers . "'/>
                                        <label for='" . self::$kilometersToMiles . "'>Kilometers To Miles</label>
					<input type='checkbox' id='" . self::$kilometersToMiles . "' name='" . self::$kilometersToMiles . "'/>
                                        <label for='" . self::$inchesToCentemeters . "'>Inches To Centemeters</label>
					<input type='checkbox' id='" . self::$inchesToCentemeters . "' name='" . self::$inchesToCentemeters . "'/>
                                        <label for='" . self::$centemetersToInches . "'>Centemeters To Inches</label>
					<input type='checkbox' id='" . self::$centemetersToInches . "' name='" . self::$centemetersToInches . "'/>
                                        </br>
					<input type='submit' name='" . self::$convert . "' value='convert'/>
                                        </br>
                                        <p>Results are rounded to 2 decimal places</p>
					<p id='" . self::$resultID . "'>$result</p>
					
				</fieldset>
			</form>
		";
    }

}
