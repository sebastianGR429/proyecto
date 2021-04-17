<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/controlador/PHPMailer/src/Exception.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/controlador/PHPMailer/src/PHPMailer.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/controlador/PHPMailer/src/SMTP.php');

class EnviarCorreo{

  
    public function enviarSolicitud($partner,$para,$asunto,$mensaje,$xml){
        $mail = new PHPMailer(true);
        
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->Username='chibchaw@gmail.com';
        $mail->Password='S3bastian00';
        $mail->setFrom('chibchaw@gmail.com','Servidores ChibchaWeb');
        $mail->addAddress($para);
        $mail->subject=$asunto;
        $mail->isHTML(true);
        //CREAR UNA LOGITO
        $ruta=$_SERVER['DOCUMENT_ROOT'] . '/proyecto/images/logo/logoPagina.pnng';
        $mail->AddEmbeddedImage($ruta, 'my-photo', 'logo.png'); 
        $mail->Body='
                    <div style="display:flex;
                    align-items:center;
                    justify-content:center;">  <img  alt="PHPMailer" src="cid:my-photo">    
                    </div>

                    <h1 align=center> Solicitud ChibchaWeb </h1>
                    <h4> información  </h4>
                    <p>   datos2 <p>
                    <br> 
                    <br>
                    <p> Hola! '.$partner.'  </p>
                    <br>
                    <p>'.$mensaje.'  </p>
                    <br>
                    <p> Archivo:'.$xml.'</p>';
        if(!$mail->send()){
            echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
        }else{
            return 1;
        }

    }

    public function enviarContraseña($para,$asunto,$mensaje){
        $mail = new PHPMailer(true);
        
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->Username='chibchaw@gmail.com';
        $mail->Password='S3bastian00';
        $mail->setFrom('chibchaw@gmail.com','Servidores ChibchaWeb');
        $mail->addAddress($para);
        $mail->subject=$asunto;
        $mail->isHTML(true);
        //CREAR UNA LOGITO
        $ruta=$_SERVER['DOCUMENT_ROOT'] . '/proyecto/images/logo/logoPagina.pnng';
        $mail->AddEmbeddedImage($ruta, 'my-photo', 'logo.png'); 
        $mail->Body='
                    <div style="display:flex;
                    align-items:center;
                    justify-content:center;">  <img  alt="PHPMailer" src="cid:my-photo">    
                    </div>

                    <h1 align=center> Recuperar contraseña - ChibchaWeb </h1>
                    <h4> información  </h4>
                    <p>   datos2 <p>
                    <br> 
                    <br>
                    <p> Hola! '.$para.'  </p>
                    <br>
                    <p>'.$mensaje.'</p>';
        if(!$mail->send()){
            echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
        }else{
            return 1;
        }

    }
}
?>