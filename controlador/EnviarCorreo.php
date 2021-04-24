<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/controlador/PHPMailer/src/Exception.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/controlador/PHPMailer/src/PHPMailer.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/proyecto/controlador/PHPMailer/src/SMTP.php');

class EnviarCorreo{

    public function enviarSolicitud($partner,$para,$asunto,$mensaje,$path){
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPDebug = 3;
            $mail->Debugoutput = 'html';
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPSecure = "tls";
            $mail->SMTPAuth=true;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Username='chibchaw@gmail.com';
            $mail->Password='S3bastian00';
            $mail->CharSet = 'UTF-8';
            $ruta=$_SERVER['DOCUMENT_ROOT'] . '/proyecto/cliente/'.$path;
            $mail->setFrom('chibchaw@gmail.com','Servidores ChibchaWeb');
            $mail->addAddress($para);
            $mail->subject=$asunto;
            $mail->isHTML(true);
            $mail->AddAttachment($ruta, "Solicitud_Dominio.xml");            
            $mail->Body='

            <h1 align=center> Solicitud ChibchaWeb </h1>
            <br> 
            <br>
            <p> Hola! '.$partner.'  </p>
            <br>
            <p>'.$mensaje.'</p>';
            
        if(!$mail->send()){
             return ("error Al enviar el mensaje");
        }else{

        return 1;
    }
          }  catch (Exception $e) {
              print_r($e);
            return 0;
          }
        

    }

    

    function crearSolicitud($nom_dominio,$corr_cliente)
    {
        $num=rand();
        $arch="solicitud".$num.".xml";
        
        $xml = new DomDocument('1.0', 'UTF-8');
        $solicitud = $xml->createElement('solicitud');
        $solicitud = $xml->appendChild($solicitud);
        $dominio = $xml->createElement('dominio',$nom_dominio);
        $dominio = $solicitud->appendChild($dominio);
        $correo = $xml->createElement('correo_cliente',$corr_cliente);
        $dominio = $solicitud->appendChild($correo);
        $xml->formatOutput = true;
        $xml->saveXML();
        $xml->save("solicitudes/".$arch);

        return "solicitudes/".$arch;

        
    }
}
?>