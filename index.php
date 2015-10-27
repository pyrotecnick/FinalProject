<?php

/**
 * @author Nick Lashinski
 */
require_once("view/DateTimeView.php");
require_once("view/LayoutView.php");
require_once("view/HomeView.php");
require_once("view/CalculatorView.php");
require_once("view/ConverterView.php");
require_once("model/CalculatorModel.php");
require_once("model/ConverterModel.php");
require_once("controller/CalculatorController.php");
require_once("controller/ConverterController.php");
require_once("controller/MasterController.php");

//session must be started before LoginModel is created
session_start();
//Controller must be run first since state is changed
$calcModel = new \model\CalculatorModel();
$convModel = new \model\ConverterModel();
$calcView = new \view\CalculatorView();
$convView = new \view\ConverterView();
$calcControl = new \controller\CalculatorController($calcModel, $calcView);
$convControl = new \controller\ConverterController($convModel, $convView);
$masterControl = new \controller\MasterController($calcControl, $convControl);
$masterControl->handleInput();

//Generate output
$view = $masterControl->generateOutput();
$dtv = new \view\DateTimeView();
$layoutView = new \view\LayoutView();
$layoutView->render($view, $dtv);
