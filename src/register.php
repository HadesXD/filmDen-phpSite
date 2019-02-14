<?php 
    include_once 'utils/database.php';
    include_once 'utils/session.php';
 ?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FilmDen</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include_once 'alert.php'; ?>
    <form class="box" action="user_insert.php" method="post">
      <h1>Register</h1>
      <input type="text" name="username" required="required" placeholder="Username"/>
      <input type="text" name="email" required="required" placeholder="Email"/>
      <input type="password" name="password" required="required" placeholder="Password"/>
      <label class="container">Show Password
        <input type="checkbox" name="checkbox" value="true">
        <span class="checkmark"></span>
      </label>
      <input type="password" name="passwordConfirm" required="required" placeholder="Confirm Password"/>
      <input type="submit" name="register" value="Register"/>
      <div>Already have an account? Hoe</div>
    </form>
  </body>
</html>
