<?php
require_once 'controllers/process.php';


$controller = new process() ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->processTransaction();
} else {
    $controller->showForm();
}