<?php

/*
 * @author Nick Lashinski
 */

namespace controller;

require_once("model/CalculatorModel.php");
require_once("view/CalculatorView.php");

class CalculatorController {

    private $model;
    private $view;

    /**
     * Constructs a CalculatorController object and stores the model and view
     * @param \model\CalculatorModel $model
     * @param \view\CalculatorView $view
     */
    public function __construct(\model\CalculatorModel $model, \view\CalculatorView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * Has the model do the conversion and passes result to the view
     */
    public function doControl() {
        $this->view->saveResult(
                $this->model->doCalculation(
                        $this->view->getSelectedOperations(), $this->view->getOperand1(), $this->view->getOperand2()));
    }

    /**
     * Returns the saved calculatorView
     * @return \view\CalculatorView $view
     */
    public function getView() {
        return $this->view;
    }

}
