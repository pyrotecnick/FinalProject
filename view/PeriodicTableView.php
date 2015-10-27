<?php

/*
 * @author Nick Lashinski
 */

namespace view;

class PeriodicTableView {

    /**
     * These names are used in $_POST
     * @var string
     */
    private static $input = "PeriodicTableView::Input";
    private static $find = "PeriodicTableView::Find";
    private static $resultID = "PeriodicTableView::Result";
    private $result = "";

    /**
     * Sets result to a warning if input is invalid
     * @return the html for the Periodic Table
     */
    public function doView() {
        if ($this->userWantsElement() && $this->getInput() == "") {
            $this->result = "Please Enter Atomic Number";
        } else if ($this->userWantsElement() && !is_numeric($this->getInput())) {
            $this->result = "Please only enter Atomic Number";
        } else if ($this->userWantsElement() && ($this->getInput() > 118 || $this->getInput() < 1)) {
            $this->result = "Invalid Atomic Number";
        }

        //generate HTML
        return $this->generateCalculatorHTML($this->result);
    }

    /**
     * Checks if user has pressed the find button
     * @return bool
     */
    public function userWantsElement() {
        return isset($_POST[self::$find]);
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
     * Used by Model to pass in the result
     * @param $result
     */
    public function saveResult($result) {
        $this->result = $result;
    }

    /**
     * Builds the HTML for the Periodic Table with the result of a sucsessful 
     * calculation or a warning for invalid input
     * @param $result
     * @return HTML
     */
    private function generateCalculatorHTML($result) {
        return "<form method='post' > 
				<fieldset>
					<legend>Please enter atomic number to learn more</legend>
					<label for='" . self::$input . "'>Input </label>
					<input type='text' id='" . self::$input . "' name='" . self::$input . "'/>
                                        <input type='submit' name='" . self::$find . "' value='Find'/>
                                        </br>
					<p id='" . self::$resultID . "'>$result</p>
                                        </br>
                                        <img src='https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Periodic_table_(polyatomic).svg/1280px-Periodic_table_(polyatomic).svg.png' alt='Periodic Table'>
					
				</fieldset>
			</form>
		";
    }

}
