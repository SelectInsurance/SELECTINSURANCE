<?php
//Exportando libreria para envio de correos
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'app/models/autoload.php';
class ControllerAgentes
{

    public function Controller($Valor)
    {
        if (file_exists('app/views/pages/AgentesPages/' . $Valor . '.php')) {
            require_once 'app/views/assets/NavAgentePersonalizado.php';
            require_once 'app/views/pages/AgentesPages/' . $Valor . '.php';

            if (isset($_POST['btnform1enviar'])) {

                //Consulta para sacar el Email del Agente y poder enviar emails con la libreria
                $ReadEmail = new crud();
                $Email = $ReadEmail->Read("SELECT Email FROM CrearPagina WHERE Titulo = '$Valor'");
                $rows = mysqli_fetch_assoc($Email);


                //Usando Libreria
                require_once 'app\models\clases\PHPMailer\Exception.php';
                require_once 'app\models\clases\PHPMailer\PHPMailer.php';
                require_once 'app\models\clases\PHPMailer\SMTP.php';

                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    //$mail->SMTPDebug = 0;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'leadselectinsurance@gmail.com';
                    $mail->Password   = '$egurid@d2021';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('leadselectinsurance@gmail.com', 'selectinsurance.info/'.$Valor);
                    $mail->addAddress('selectinsurance210@gmail.com', 'Web Site');     //Add a recipient
                    //$mail->addAddress('ellen@example.com');               //Name is optional
                    //$mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                    //Attachments
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Lead de la pagina selectinsurance.info/'.$Valor;
                    $mail->Body    = 
                    'Nombre: '.$_POST['nombre'].'<br>'.
                    'Apellido: '.$_POST['apellido'].'<br>'.
                    'Correo: '.$_POST['correo'].'<br>'.
                    'Telefono: '.$_POST['telefono'].'<br>'.
                    'Estado: '.$_POST['estado'].'<br>'.
                    'Servicio: '.$_POST['servicio'].'<br>';
                    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    echo 'El mensaje se envio correctamente';
                } catch (Exception $e) {
                    echo "Hubo un error: {$mail->ErrorInfo}";
                }
            }
        }
    }

    //public function ControllerAngelaHerrera()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/AngelaHerrera.php';
    //}
    //
    //public function ControllerLuaArcila()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/LuaArcila.php';
    //}
    //
    //public function ControllerLesslieFonseca()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/LeslieFonseca.php';
    //}
    //public function ControllerManoelaFirvida()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/ManoelaFirvida.php';
    //}
    //
    //
    //public function ControllerYoimaValdes()
    //{
    //    require_once 'app/views/assets/NavAgentePersonalizado.php';
    //    require_once 'app/views/pages/AgentesPages/YoimaValdes.php';
    //}

}
