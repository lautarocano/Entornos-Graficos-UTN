<?php
    $nombre_persona = $_POST["InputNameUser"] ;
    $email_persona = $_POST["InputEmailUser"];
    $nombre_amigo = $_POST["InputNameFriend"];
    $email_amigo= $_POST["InputEmailFriend"];
    $mensaje= $_POST["Message"];
    $pagina = "https://www.php.net/manual/es/intro-whatis.php";
            
    $asunto="Tu amigo/a ".$nombre_persona." te recomienda conocer mas sobre PHP";
    $cuerpo = "De: ".$nombre_persona."\nEmail: ".$email_persona."\n".$mensaje."\nVisita la pagina en: ".$pagina;
    $headers = "MIME-Version: 1.0\r\n";
    mail($email_amigo,$asunto,$cuerpo,$headers);
    header("Location:enviado.html");
?>