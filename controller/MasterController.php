<?php

/*
 * controller to run other controllers and manage page transitions
 * @author Nick Lashinski
 */

namespace controller;

require_once("model/CalculatorModel.php");
require_once("model/ConverterModel.php");
require_once("controller/CalculatorController.php");
require_once("controller/ConverterController.php");
require_once("view/NavigationView.php");

class MasterController {

    private $navigationView;
    private $calculatorController;
    private $conversionController;
    private $periodicController;
    private $homeView;
    private $view;

    /**
     * Constructs a MasterController object, stores the controllers passed in,
     * creates a navigationView and a homeView
     * @param \controller\CalculatorController $calcControl
     * @param \controller\ConverterController $convControl
     */
    public function __construct(CalculatorController $calcControl, ConverterController $convControl, PeriodicTableController $periodicControl) {
        $this->navigationView = new \view\NavigationView();
        $this->calculatorController = $calcControl;
        $this->conversionController = $convControl;
        $this->periodicController = $periodicControl;
        $this->homeView = new \view\HomeView();
    }

    /**
     * If checks if a user has selected one of the tool pages and runs the 
     * correct controller and gets the correct view
     * Otherwise gets the home page view
     */
    public function handleInput() {
        $this->checkView();
        if ($this->navigationView->inCalculator()) {
            $this->calculatorController->doControl();
            $this->view = $this->calculatorController->getView();
        } else if ($this->navigationView->inConverter()) {
            $this->conversionController->doControl();
            $this->view = $this->conversionController->getView();
        } else if ($this->navigationView->inPeriodic()) {
            $this->periodicController->doControl();
            $this->view = $this->periodicController->getView();
        }else {
            $this->view = $this->homeView;
        }
    }

    /**
     * Returns the view that should be loaded
     * @return view
     */
    public function generateOutput() {
        return $this->view;
    }

    /**
     * makes sure the navigationView has been created
     */
    private function checkView() {
        if ($this->navigationView == NULL) {
            $this->navigationView = new \view\NavigationView();
        }
    }

}
