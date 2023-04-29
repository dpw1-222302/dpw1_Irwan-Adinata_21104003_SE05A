<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <?php include('welcome.php'); ?>
    <h1>Login</h1>
    <form action="resultIndex.php" method="POST">
      <label>Username</label><br>
      <input type="text" name='username'>
      <br>
      <label>Password</label><br>
      <input type="password" name='password'>
      <br>
      <button type="submit" name="submit">Login</button>
      <p> Belum punya akun?
        <a href="register.php">Register di sini</a>
      </p>
    </form>
  </div>
</body>
</html>