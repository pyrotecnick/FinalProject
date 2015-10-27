<?php

/*
 * @author Nick Lashinski
 */

namespace controller;

require_once("model/ConverterModel.php");
require_once("view/ConverterView.php");

class ConverterController {

    private $model;
    private $view;

    /**
     * Constructs a ConverterController object and stores the model and view
     * @param \model\ConverterModel $model
     * @param \view\ConverterView $view
     */
    public function __construct(\model\ConverterModel $model, \view\ConverterView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * Has the model do the conversion and passes result to the view
     */
    public function doControl() {
            $this->view->saveResult(
                    $this->model->doConversion(
                            $this->view->getSelectedOperations(),  $this->view->getInput()));
    }

    
    /**
     * Returns the saved converterView
     * @return \view\ConverterView $view
     */
    public function getView() {
        return $this->view;
    }

}
