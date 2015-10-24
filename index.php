<?php
 /**
  * @author Nick Lashinski
  */

require_once("view/DateTimeView.php");
require_once("view/LayoutView.php");
require_once("model/CalculatorModel.php");
require_once("controller/CalculatorController.php");
require_once("view/DateTimeView.php");

//session must be started before LoginModel is created
session_start(); 
//Controller must be run first since state is changed
$m = new \model\CalculatorModel();
$v = new \view\CalculatorView();
$cc = new \controller\CalculatorController($m, $v);
$cc->doControl();

//Generate output
$dtv = new \view\DateTimeView();
$layoutView = new \view\LayoutView();
$layoutView->render($v, $dtv);