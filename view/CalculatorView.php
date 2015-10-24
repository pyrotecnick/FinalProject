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
        private static $resultID = "CalculatorView::Result";
        private $result = "";
    
    public function doCalculator() {
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
        
        public function userWantsCalculation(){
            return isset($_POST[self::$equals]);
        }
        
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
            return $selectedOperations;
        }
        
        public function getOperand1() {
		if (isset($_POST[self::$operand1]))
			return trim($_POST[self::$operand1]);
		return "";
	}
        
        public function getOperand2() {
        if (isset($_POST[self::$operand2]))
			return trim($_POST[self::$operand2]);
		return "";
	}
        
        public function saveResult($result){
            $this->result = $result;
        }

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
                                        <label for='".self::$divide."'>Modulus </label>
					<input type='checkbox' id='".self::$modulus."' name='".self::$modulus."'/>
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