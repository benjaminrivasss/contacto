<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mail Form</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <form method="post">
    <input type="text" placeholder="name" required="">
    <input type="email" placeholder="email" required="">
    <input type="text" placeholder="asunto" required="">
    <textarea placeholder="mensaje" name="msg" required=""></textarea>
    <input type="submit" placeholder="enviar">
  </form>

  <form>
    <?php
    include("correo.php")
    
    ?>
  </form>
</body>
</html>