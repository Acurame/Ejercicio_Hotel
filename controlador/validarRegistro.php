<?php

include("../Model/db.php"); 

$identific = rand(1000,9999);

if(isset($_POST['save'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['mail'];
    $nombreclient = $_POST['nombreclient'];
    $apellidoclient = $_POST['apellidoclient'];
    $nit = $_POST['nit'];
    $direccion = $_POST['direccion'];
    $direcion = "../img/";
    mkdir($direcion . $user);
   

    $consult = "INSERT INTO usuarios(IdUsuario,NombreUsuario, password, Correo, rol) VALUES ('$identific','$user','$password','$email','2')";
    $error = mysqli_query($conexion,$consult);

    $consulta2 = "INSERT INTO clientes( NombreCliente, ApellidoCliente, Nit, Direccion, IdUsuario) VALUES ('$nombreclient','$apellidoclient','$nit','$direccion','$identific')";
    $error2 = mysqli_query($conexion,$consulta2);


        if(!$error){
            die("Error");
        }
    
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/PHPMailer/Exception.php';
require '../assets/PHPMailer/PHPMailer.php';
require '../assets/PHPMailer/SMTP.php';
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