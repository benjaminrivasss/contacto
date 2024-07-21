<?php	

if (isset($_POST['enviar'])){
  if (!empty($_POST['name'])&&!empty($_POST['asunto'])&&!empty($_POST['msg'])&&!empty($_POST['mail'])){
    $name = $_POST['name'];
    $asunto = $_POST['asunto'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];
    $header = "from: noreply@example.com" . "\r\n";
    $header = "reply-to: benmadryn2@gmail.com" . "\r\n";
    $header = "X-Mailer: PHP/" . phpversion();
    $mail = mail($email,$asunto,$msg,$header);
    if ($mail) {
      echo "<h4> ¡Mail enviado exitosamente! </h4>";
    
  }
}
}

?>