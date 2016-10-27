<?php
function sendMail($mail, $name, $lastname){

  $enviar_a = 'jonathan.schell@portlike.com';
  $desde = 'jonathan.schell@portlike.com';
  $nombre_desde = 'Forms Popular';

  $body_mail = contact($mail, $name, $lastname);

  $subject = 'Subject';

  require 'PHPMailerAutoload.php';
  require 'class.smtp.php';
  $mail = new PHPMailer();

  $mail->IsSMTP();
  $mail->Mailer = 'smtp';
  $mail->SMTPAuth = true;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;
  $mail->SMTPSecure = 'ssl';
  //$mail->SMTPDebug = 2;

  //Correo para usar de motor
  $mail->Username = "motor@gmail.com";
  $mail->Password = "contraseña";

  $mail->IsHTML(true); // if you are going to send HTML formatted emails
  $mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

  $mail->From = $desde;
  $mail->FromName = $nombre_desde;

  $mail->addAddress($enviar_a);

  $mail->Subject = $subject;
  $mail->Body = $body_mail;
  $mail->Send();

}

function contact($mail, $name, $lastname){
  return '<p>Mensaje desde <b>Forms Popular</b><table>
    <tr>
      <td>Nombre: </td>
      <td>'.$name.'</td>
    </tr>
    <tr>
      <td>Apellido: </td>
      <td>'.$lastname.'</td>
    </tr>
    <tr>
      <td>E-Mail: </td>
      <td>'.$mail.'</td>
    </tr>
  </table>';
  return $body_mail;
}
?>
