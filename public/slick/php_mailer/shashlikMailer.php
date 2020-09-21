<?php
if( !empty($_POST["buyer_name"]) ) {
    $fio = $_POST["buyer_name"];
}
if( !empty($_POST["buyer_tel"]) ) {
    $phone = $_POST["buyer_tel"];
}
if( !empty($_POST["buyer_adr"]) ) {
    $adress = $_POST["buyer_adr"];
}
if( !empty($_POST["buyer_mes"]) ) {
    $comment = $_POST["buyer_mes"];
}
if( !empty($_POST["order_id"]) ) {
    $order_number = $_POST["order_id"];
}
if( !empty($_POST["amount"]) ) {
    $amount = $_POST["amount"];
}
if( !empty($_POST["sum"]) ) {
    $sum = $_POST["sum"];
}
if( !empty($_POST["product"]) ) {
    $prod = $_POST["product"];
}
if( !empty($_POST["type"]) ) {
    $type = $_POST["type"];
}
$date_now = date("d.m.Y");

$product = str_replace(";", "; <br />", $prod);

include '../Controller.php';

$controller = new Controller();
$ar = $controller->object_from_file('array.txt');

if ($type == 1) {
    $msg = "<style type='text/css'>
        td{
            vertical-align: top;
            border:1px solid #333;
            padding: 5px 10px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
    Заказ №$order_number с сайта Shashlik73 от $date_now:<br />
    <table>
        <tr>
            <td>Имя:</td>
            <td>$fio</td>
        </tr>
        <tr>
            <td>Телефон:</td>
            <td>$phone</td>
        </tr>
        <tr>
            <td>Адрес доставки:</td>
            <td>$adress</td>
        </tr>
        <tr>
            <td>Пожелания к заказу:</td>
            <td>$comment</td>
        </tr>
        <tr>
            <td>Заказ:</td>
            <td>$product</td>
        </tr>
        <tr>
            <td>Всего товаров заказано:</td>
            <td>$amount ед.</td>
        </tr>
        <tr>
            <td>Сумма заказа:</td>
            <td>$sum руб.</td>
        </tr>
    </table>
    ";
} else{
    $msg = "<style type='text/css'>
        td{
            vertical-align: top;
            border:1px solid #333;
            padding: 5px 10px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
    Заяка на обратный звонок с сайта Shashlik73 от $date_now:<br />
    <table>
        <tr>
            <td>Имя:</td>
            <td>$fio</td>
        </tr>
        <tr>
            <td>Телефон:</td>
            <td>$phone</td>
        </tr>
    </table>";
}

$email ="shashlik173@yandex.ru";
$subject .="Заявка с сайта";

function smtp_mail($email, $subject, $msg, $alt_msg = 'HTML is disabled') { 
    include_once './class_phpmailer.php';
    include_once './class_smtp.php';
    $mail = new PHPMailer(); 
    $mail->CharSet = 'utf-8'; 
    $mail->SMTPDebug = 2; // use 2 to on this function 
    $mail->isSMTP(); 
    $mail->Host = "smtp.yandex.ru"; 
    $mail->SMTPAuth = true; 
    $mail->FromName = 'Сообщение с сайта '.$_SERVER['SERVER_NAME']; 
    $mail->Username = "no-reply@agatech.ru"; 
    $mail->Password = "7Ub49Hwf"; 
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = 465; 

    $mail->isHTML(true); 
    $mail->addAddress($email); 

    $mail->Subject = $subject; 
    $mail->Body = $msg; 
    $mail->AltBody = $alt_msg; 

    $mail->From = $mail->Username; 

    return $mail->send(); 
}

$success = smtp_mail($email, $subject, $msg);


