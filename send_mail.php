<?php
if (isset($_POST['kirim'])) {
    $to = 'ms.santi.dcc@gmail.com';
    $subject = 'Pesan dari ' . $_POST['nama'];
    $pesan = $_POST['pesan'];
    $message = wordwrap($pesan, 70, "\r\n");
    $headers = $_POST['email'];

    mail($to, $subject, $message, $headers);
}
echo $subject, $message, $headers;
