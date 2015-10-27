<?php

/*
 * @author Nick Lashinski
 */

namespace model;

require_once("PeriodicElement.php");

class PeriodicTableModel {
    
    private $element;

    /**
     * creates a PeriodicTableModel object and initializes a PeriodicElement object
     */
    public function __construct() {
        $this->element = new \model\PeriodicElement();
    }

    /**
     * Finds info on the requested element
     * 
     * @param $input user input
     * 
     * @return the result or blank string for inproper input
     */
    public function doLookup($input) {
        
        if($input == ""){
            return "";
        }else if(!is_numeric($input)){
                return "";
        }else if(strlen($input > 118)){
            return "";
        }else{
            return $this->element->lookup($input);
        }
    }

}
