<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["kirim"])) {
    // buat phpmailer baru
    $mail = new PHPMailer(true);

    // server setting
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ms.santi.dcc@gmail.com';
    $mail->Password = 'xjsjrdispxljbbyo';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // penerima
    $mail->setFrom($_POST["email"]);
    $mail->addAddress('ms.santi.dcc@gmail.com');

    // content
    $mail->isHTML(true);
    $mail->Subject = $_POST["subjek"];
    $mail->Body = $_POST["pesan"];

    $mail->send();

    // reaksi
    echo
    "
    <script>
    alert('Pesan Terkirim');
    document.location.href = 'cu.html';
    </script>
    ";
}
