<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/Controlador/PHPMailer/src/Exception.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/Controlador/PHPMailer/src/PHPMailer.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/Controlador/PHPMailer/src/SMTP.php');

class enviarCorreo{

  
    public function enviarSolicitud($partner,$para,$asunto,$mensaje,$xml){
        $mail = new PHPMailer(true);
        #$mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->Username='chibchaw@gmail.com';
        $mail->Password='S3bastian00';
        $mail->setFrom('libreriabosquecillo@gmail.com','Feria Laboral Universidad El Bosque');
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
                    <p> Muy buenas '.$partner.'  </p>
                    <br>
                    <p>'.$mensaje.'  </p>
                    <br>
                    <p> Archivo:'.$xml.'</p>
                    ';
if(!$mail->send()){
    echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
}else{
    return 1;
}

    }
}
?>