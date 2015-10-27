<?php

/*
 * @author Nick Lashinski
 */

namespace controller;

require_once("model/PeriodicTableModel.php");
require_once("view/PeriodicTableView.php");

class PeriodicTableController {

    private $model;
    private $view;

    /**
     * Constructs a PeriodicTableController object and stores the model and view
     * @param \model\PeriodicTableModel $model
     * @param \view\PeriodicTableView $view
     */
    public function __construct(\model\PeriodicTableModel $model, \view\PeriodicTableView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * Has the model do the conversion and passes result to the view
     */
    public function doControl() {
        $this->view->saveResult(
                $this->model->doLookup(
                        $this->view->getInput()));
    }

    /**
     * Returns the saved PeriodicTableView
     * @return \view\PeriodicTableView $view
     */
    public function getView() {
        return $this->view;
    }

}
