<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acceder</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <h1>Acceder</h1>
    <span>o <a href="SignUp.php"> Regístrate </a>

    <form action="LogIn.php method="post">
      <input type="text" name="email" placeholder="Ingresa un e-mail válido">
      <input type="password" name"password" placeholder="Crea una contraseña">
      <input type="submit" value="Send">

    </form>

  </body>
</html>
