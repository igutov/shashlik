<?php
/**
 * Created by PhpStorm.
 * User: Мария
 * Date: 25.04.2018
 * Time: 8:35
 */
include 'Controller.php';

$controller = new Controller();
$ar = $controller->object_from_file('array.txt');
echo json_encode($ar);
