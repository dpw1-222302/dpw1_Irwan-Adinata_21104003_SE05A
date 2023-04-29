<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <?php include('welcome.php'); ?>
    <h1>Daftar</h1>
    <form action="resultRegister.php" method="POST">
      <label>Username</label><br>
      <input type="text" name= 'username'>
      <br>
      <label>Email</label><br>
      <input type="text" name= 'email'>
      <br>
      <label>Password</label><br>
      <input type="password" name= 'password'>
      <br>
      <button type="register" name="register">Daftar</button>
      <p> Sudah punya akun?
        <a href="index.php">Login di sini</a>
      </p>
    </form>
  </div>
</body>
</html>