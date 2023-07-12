<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initialscale=1.0">
  <title>Halaman Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <h1>Logo</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        <li class="nav-item">
          <?php
          session_start();
          if ($_SESSION['status'] = "sudah_login") {
            echo "<p class='nav-link'>Selamat datang, " . $_SESSION['email'] . "</p>";
          } else {
            echo "<a class='nav-link' href='#'>Login</a>";
          }
          ?>
          <!-- <a class="nav-link" href="#">Login</a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Login Form -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form action="proses_login.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" class="form-control" id="email" placeholder="Masukan email" name="email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" class="form-control" id="password" placeholder="Masukkan password"
                  name="pass">
              </div>
              <button type="submit" class="btn btnprimary">Masuk</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>