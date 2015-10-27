<?php

/* 
 * @author Nick Lashinski
 */

namespace view;

class CalculatorView {
    /**
	 * These names are used in $_POST
	 * @var string
	 */
	private static $operand1 = "CalculatorView::Operand1";
	private static $operand2 = "CalculatorView::Operand2";
        private static $equals = "CalculatorView::Equals";
        private static $divide = "CalculatorView::Divide";
        private static $multiply = "CalculatorView::Multiply";
        private static $add = "CalculatorView::Add";
        private static $subtract = "CalculatorView::Subtract";
        private static $modulus = "CalculatorView::Modulus";
        private static $exponent = "CalculatorView::Exponent";
        private static $resultID = "CalculatorView::Result";
        
        private $result = "";
    
        /**
         * Sets result to a warning if input is invalid
         * @return the html for the calculator
         */
    public function doView() {
		if ($this->userWantsCalculation() && $this->getOperand1() == "" && $this->getOperand2() == "") {
                    $this->result = "Please Fill in both Operands";
		} else if ($this->userWantsCalculation() && !is_numeric($this->getOperand1())){
                    $this->result = "Operand 1 Must be a Number";
                } else if ($this->userWantsCalculation() && !is_numeric($this->getOperand2())){
                    $this->result = "Operand 2 Must be a Number";
                } else if ($this->userWantsCalculation() && $this->getSelectedOperations() == ""){
                    $this->result = "Please Select an Operation";
                } else if ($this->userWantsCalculation() && strlen($this->getSelectedOperations()) > 1){
                    $this->result = "Please Only Select One Operation";
                }
		
		//generate HTML
		return $this->generateCalculatorHTML($this->result);
	}
        
        /**
         * Checks if user has pressed the equals button
         * @return bool
         */
        public function userWantsCalculation(){
            return isset($_POST[self::$equals]);
        }
        
        /**
         * Returns a string with a character for each selected operation
         * @return string
         */
        public function getSelectedOperations(){
            $selectedOperations = "";
            if(isset($_POST[self::$divide])){
                $selectedOperations .= "/";
            }
            if(isset($_POST[self::$multiply])){
                $selectedOperations .= "x";
            }
            if(isset($_POST[self::$subtract])){
                $selectedOperations .= "-";
            }
            if(isset($_POST[self::$add])){
                $selectedOperations .= "+";
            }
            if(isset($_POST[self::$modulus])){
                $selectedOperations .= "%";
            }
            if(isset($_POST[self::$exponent])){
                $selectedOperations .= "^";
            }
            return $selectedOperations;
        }
        
        /**
         * Gets user input for operand 1
         * @return string
         */
        public function getOperand1() {
		if (isset($_POST[self::$operand1]))
			return trim($_POST[self::$operand1]);
		return "";
	}
        
        /**
         * Gets user input for operand 2
         * @return string
         */
        public function getOperand2() {
        if (isset($_POST[self::$operand2]))
			return trim($_POST[self::$operand2]);
		return "";
	}
        
        /**
         * Used my Model to pass in the result
         * @param $result
         */
        public function saveResult($result){
            $this->result = $result;
        }

        /**
     * Builds the HTML for the calculator with the result of a sucsessful 
     * calculation or a warning for invalid input
     * @param $result
     * @return HTML
     */
    private function generateCalculatorHTML($result) {
		return "<form method='post' > 
				<fieldset>
					<legend>Enter Operands, select an operation, and press = </legend>
					<label for='".self::$operand1."'>Operand 1 </label>
					<input type='text' id='".self::$operand1."' name='".self::$operand1."'/>
                                        </br>
                                        <label for='".self::$add."'>Addition </label>
					<input type='checkbox' id='".self::$add."' name='".self::$add."'/>
                                        <label for='".self::$subtract."'>Subtraction </label>
					<input type='checkbox' id='".self::$subtract."' name='".self::$subtract."'/>
                                        <label for='".self::$multiply."'>Multiplication </label>
					<input type='checkbox' id='".self::$multiply."' name='".self::$multiply."'/>
                                        <label for='".self::$divide."'>Division </label>
					<input type='checkbox' id='".self::$divide."' name='".self::$divide."'/>
                                        <label for='".self::$modulus."'>Modulus </label>
					<input type='checkbox' id='".self::$modulus."' name='".self::$modulus."'/>
                                        <label for='".self::$exponent."'>Exponentiation </label>
					<input type='checkbox' id='".self::$exponent."' name='".self::$exponent."'/>
                                        </br>
                                        <label for='".self::$operand2."'>Operand 2 </label>
					<input type='text' id='".self::$operand2."' name='".self::$operand2."'/>
					<input type='submit' name='".self::$equals."' value='='/>
                                        </br>
					<p id='".self::$resultID."'>$result</p>
					
				</fieldset>
			</form>
		";
	}
    
}