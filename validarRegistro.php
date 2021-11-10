<?php

include("Model/db.php"); 

if(isset($_POST['save'])){
    $user = $_POST['user'];
    $password = $_POST['passwd'];
    $email = $_POST['mail'];
    $direcion = "../img/";
    mkdir($direcion . $user);
   
    $consult = "INSERT INTO usuarios(NombreUsuario, password, Correo) VALUES ('$user','$password','$email')";
    $error = mysqli_query($conexion,$consult);

        if(!$error){
            die("Error");
        }
    
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try{

    //Server settings
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'pruebaproy23@gmail.com';                 // SMTP username
    $mail->Password = 'jh5587309';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('pruebaproy23@gmail.com', 'Hotel Mira Mar');
    $mail->addAddress($email);     // Add a recipient
  //  $mail->addReplyTo('jhon56489754@gmail.com');
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bienvenidos a Hotel Mira Mar';
   $mail->Body = '<h1 style="text-align: center;">Bienvenidos a Hotel Mira Mar</h1><br><br><div class="d-grid gap-2 col-6 mx-auto><button type="button" class="btn btn-success" data-bs-dismiss="modal"><a href="#" class="btn btn-warning btn-lg">Validar Cuenta</a></div>';
    //$mail->Body = $password;

 //   $mail->Body    = $mailContent ;
    $mail->send();
    echo 'El mensaje se envio correctamente';
}
catch (Exception $e){
    echo 'Hubo un error ', $mail->ErrorInfo;
}


header("location:../index.php");
// include("../index.php"); 

?>