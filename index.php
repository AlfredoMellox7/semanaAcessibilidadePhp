<?php

$controller = $_GET['controller'];
$metodo = $_GET['acao'];

$controller .= "Controller";

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/controller/estudanteController.php';

$estudante = new EstudanteController();

$objeto = new $controller();
$objeto->$metodo();