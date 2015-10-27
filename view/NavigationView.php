<?php

/*
 * helps manage the links between login and registration
 * @author Nick Lashinski
 */

namespace view;

class NavigationView {

    private static $calculatorURL = "calculator";
    private static $converterURL = "converter";
    private static $periodicURL = "periodictable";

    /**
     * Gets the URL for the calculator tool
     * @return string
     */
    public function getCalculatorURL() {
        return "?" . self::$calculatorURL;
    }

    /**
     * Gets the URL for the converter tool
     * @return sting
     */
    public function getConverterURL() {
        return "?" . self::$converterURL;
    }
    
    /**
     * Gets the URL for the periodic table tool
     * @return sting
     */
    public function getPeriodicURL() {
        return "?" . self::$periodicURL;
    }

    /**
     * Gets the URL for the home page
     * @return string
     */
    public function getHomeURL() {
        return "<a href=?>Home</a>";
    }

    /**
     * Checks for selection of calculator tool
     * @return bool
     */
    public function inCalculator() {
        return isset($_GET[self::$calculatorURL]) == true;
    }

    /**
     * Checks for selection of converter tool
     * @return bool
     */
    public function inConverter() {
        return isset($_GET[self::$converterURL]) == true;
    }

    /**
     * Checks for selection of periodic table tool
     * @return bool
     */
    public function inPeriodic() {
        return isset($_GET[self::$periodicURL]) == true;
    }
}
