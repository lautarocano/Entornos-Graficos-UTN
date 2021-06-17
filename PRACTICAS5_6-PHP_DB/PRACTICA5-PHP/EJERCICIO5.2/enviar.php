<?php
     $destinatario = "contacto@gmail.com ";
     $asunto = "Nuevo formulario de contacto";
     $nombre = $_POST["inputNombre"];
     $apellido = $_POST["inputApellido"];
     $email = $_POST["inputEmail"];
     $consulta = $_POST["inputConsulta"];

     $cuerpo = '
     <html>
         <body>
             <h1>Formulario de contacto</h1>
             <p>
             <li>Nombre: ' . $nombre . '</li>
             <li>Apellido: ' . $apellido . '</li>
             <li>Email: ' . $email . '</li>
             <li>Mensaje: ' . $consulta . '</li>
             </p>
         </body>
     </html>
     ';
     $headers = "MIME-Version: 1.0\r\n";
     $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
     if(mail($destinatario,$asunto,$cuerpo,$headers)) {
        header("Location: success.html");
      }
      else {
        header("Location: error.html");
      };
?>