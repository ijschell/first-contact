<?php
function sendMail($mail, $name, $sitio){

  $enviar_a = $mail;
  $desde = 'hi@thecodingbear.com';
  $nombre_desde = 'The Coding Bear';

  $body_mail = contact($mail, $name, $sitio);

  $subject = 'Estimado equipo de '.$name;

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
  $mail->CharSet = 'UTF-8';
  $mail->Username = "jschell.21.09.87@gmail.com";
  $mail->Password = "J0n4th4n";

  $mail->IsHTML(true); // if you are going to send HTML formatted emails
  $mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

  $mail->From = $desde;
  $mail->FromName = $nombre_desde;

  $mail->addAddress($enviar_a);

  $mail->Subject = $subject;
  $mail->Body = $body_mail;
  $mail->Send();

}

//Aquí armo el copy
function contact($mail, $name, $sitio){

  $msjheader = '<p>Estimados integrantes de '.$name.' somos un grupo de programadores y diseñadores web dedicados a ofrecer soluciones web bajo el nombre de The Coding Bear, creando aplicaciones y sitios desde hace casi 9 años.</p>';
  $msjfooter = '
  <p>Les otorgamos aquí algunos de los sitio que hemos desarrollado como referencia.</p>
  <ul>
    <li><a href="http://www.portlike.com/">www.portlike.com</a></li>
    <li><a href="http://www.diasdegloria.com/">www.diasdegloria.com</a></li>
    <li><a href="http://www.thecodingbear.com/">www.thecodingbear.com</a></li>
    <li><a href="http://licopar.com.uy/">licopar.com.uy</a></li>
    <li><a href="http://www.go-pic.com.ar/">www.go-pic.com.ar</a></li>
  </ul>
  <p>Desde ya, quedamos atentos a cualquier duda que tengan y esperamos lograr un pronto contacto con ustedes</p>';

  if($sitio == 'si'){
    $msjbody = '
    <p>Nos ponemos en contacto con ustedes ya que notamos que si bien hoy en día cuentan con un sitio web, el mismo podría ser mejorado ya que no cuenta con las reglas y tendencias que son exigidas hoy en día por la empresa Google.</p>
    <p>¿Por qué es importante seguir las reglas pactadas por Google?<br />La importancia de mantener los lazos "amigables" con Google es porque ellos son el motod de búsqueda vía Internet más grande en este momento y por darles un ejemplo, contar con un sitio web "responsive" (que se adapte al tamaño de todos los dispositivos) hace que su sitio tenga mayor prestigio a la hora de aparecer en resultados de búsqueda.</p>
    <p>En caso de que necesiten enteder más la importancia de estos lazos, pueden hacernos las preguntas que deseen.</p>';
  }else {
    $msjbody = 'Nos ponemos en contacto con ustedes ya que notamos que hasta el momento no cuentan con un sitio web propio de la empresa y nos interesa realmente de ser vuestro interés poder realizar una reunión para poder llevar a cabo un nuevo proyecto con '.$name;
  }

  return $msjheader . $msjbody . $msjfooter;
}
?>
