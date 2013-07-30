<?php
include "init.php";

define('APP',(isset($_GET['app']) && $_GET['app'] !=='')? trim($_GET['app']) : 'index');

define('ACTION',(isset($_GET['action']) && $_GET['action'] !=='')? trim($_GET['action']) : 'index');

Controller::run();

//include "main.html";