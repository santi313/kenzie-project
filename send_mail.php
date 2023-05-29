<?php


if (isset($_POST['kirim'])) {
    $to = 'ms.santi.dcc@gmail.com';
    $subject = 'Pesan dari ' . $_POST['nama'];
    $pesan = $_POST['pesan'];
    $message = wordwrap($pesan, 70, "\r\n");
    $headers = 'From : ' . $_POST['email'];
    $headers = 'From: ' . $_POST['email'] . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    ini_set('localhost', '25');
    mail($to, $subject, $message, $headers);
}
echo $subject, $message, $headers;
