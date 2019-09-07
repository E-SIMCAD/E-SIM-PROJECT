<?php require 'database.php';

  $message='';



  if (!empty($_POST['email']) && !empty($_POST['password']))
  {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Ha quedado registrado';
  } else {
    $message = 'Ha ocurrido un problema durante el registro, por favor intente nuevamente.';
  }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
        <p> <?= $message ?> </p>
        <?php endif; ?>

    <h1>Registrarse</h1>
    <span> o <a href="LogIn.php">Accede</a></span>

      <form action="SignUp.php" method="POST">
         <input type="text" name="email" type="text" placeholder="Ingresa tu email">
         <input name="password" type="password" placeholder="Ingresa una contraseña">
         <input name="confirm_password" type="password" placeholder="Confirma tu contraseña">
         <input type="submit" value="Send">
    </form>

  </body>
</html>
