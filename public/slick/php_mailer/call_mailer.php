<?php

$fio = $_POST["buyer_name"];
$phone = $_POST["buyer_tel"];
// $comment = $_POST["buyer_mes"];
$date_now = date("d.m.Y");






$msg = "Просьба позвонить с сайта Shashlik73 от $date_now:<br />
                <table>
                    <tr>
                        <td>Телефон:</td>
                        <td>$phone</td>
                    </tr>
                    <tr>
                        <td>Имя:</td>
                        <td>$fio</td>
                    </tr>
              
                </table>          
                ";


$email ="a.a.pecherskih@mail.ru";
$subject .="Просьба позвонить с сайта";

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
    $mail->Username = "v.shemeev@agatech.ru";
    $mail->Password = "mtMNkp";
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


