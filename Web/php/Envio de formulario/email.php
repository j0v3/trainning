<?php

    require_once "ini.php";

    $usuario = $_POST["nome"];
    $emailUse = $_POST["email"];
    $corpoT = $_POST["corpo"];

    //Content
    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = 'NOVO CONTATO';
    $mail->Body    = '<strong>Cliente:</strong> '.$usuario.'</br> <strong>E-mail:</strong> '.$emailUse.'</br> <strong>Menssagem:</strong> '.$corpoT.'</br></br> 
    O Usuario deixou uma menssagem e aguarda retorno seu retorno!';
    $mail->AltBody = ' Cliente: '.$usuario.' E-mail: '.$emailUse.' Menssagem: '.$corpoT. ' O Usuario deixou uma menssagem e aguarda retorno seu retorno! ';

    $mail->send();

?>