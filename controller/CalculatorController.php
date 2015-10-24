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

    public function __construct(\model\CalculatorModel $model, \view\CalculatorView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function doControl() {
            $this->view->saveResult(
                    $this->model->doCalculation(
                            $this->view->getSelectedOperations(),  $this->view->getOperand1(), $this->view->getOperand2()));
    }

    public function getView() {
        return $this->view;
    }

}
