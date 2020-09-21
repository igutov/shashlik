<?php
/**
 * Created by PhpStorm.
 * User: Мария
 * Date: 25.04.2018
 * Time: 10:45
 */
include "./busket.php";
$out = new stdClass();
$out->my_over_status = "НЕТ ДАННЫХ!!!";
if(isset($_POST['localStorage']) && !empty($_POST['localStorage'])){
    $localStorage  = json_decode($_POST['localStorage']);
    // Теперь переменная $localStorage это полноценный объект с свойствами

    // ajax ждёт ответа и данные должны придти в формате json
    header("Content-type:application/json");
    $out->my_over_status = "Отлично!!!";
    //Завершаем скрипт
    session_start();
    $_SESSION['busket'] = $localStorage;


    die( json_encode($out) );
}
die( json_encode($out) );
