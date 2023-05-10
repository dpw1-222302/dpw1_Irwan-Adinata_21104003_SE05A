<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top p-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/logo.jpg" alt="" width="50" height="50" />
        </a>
        <a class="navbar-brand" href="#home">Restauranty</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Account</a>
            </li>
            <li>
              <button type="button" class="btn btn-dark">CONTACT NOW</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!--search -->
    <div class="conteiner-fluid banner"><br><br><br><br>
      <div class="container text-center">
        <h4 class="display-6 fw-bold mb-3">Organic Foods Made <br>Easy & Healthy</h4>
        <div class="row text-center">
          <div class="col-3"></div>
          <div class="col">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Cari Makanan/Minuman disini....." aria-label="Search" />
              <button class="btn btn-secondary" type="submit">  Search  </button>
            </form>
          </div>
          <div class="col-3"></div>
        </div>
      </div>
    </div>
    <!-- end search -->
</body>
</html>