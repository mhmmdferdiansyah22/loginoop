<?php

session_start();

if($_SESSION["username"] === null){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
    body {
      background-image: url("img/o.jpg");
      background-size: cover;
    }

    .box-pendidikan {
      text-align: center;
      margin: 30px 20px 20px 90px;
      align-content: center;
    }

    .box-kiri, .box-tengah, .box-kanan {
      width: 300px;
      height: 320px;
      background-color: #f0f0f0;
      text-align: center;
      padding: 30px 30px;
      margin: 70px 30px 30px 55px;
      border-radius: 20px;
      float: left;
      
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand text-white fw-bold" href="#">Toko Ikan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Detail</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="logout.php" class="dropdown-item text-decoration-none">Logout</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active text-white text-center" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white text-center" aria-current="page" href="#">About</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="box-pendidikan">
  <h1 class="text-white">Welcome <?php echo $_SESSION['username']?>, to Library SMKN 10 JAKARTA</h1>
  <div class="box-kiri">
    <img src="img/g.jpg" alt="" class="img-fluid">
    <p><h2 class="text-primary">Ikan Hias</h2></p>
  </div>

  <div class="box-tengah">
    <img src="img/f.jpg" alt="" class="img-fluid">
    <p><h2 class="text-primary">Ikan Predator</h2></p>
  </div>

  <div class="box-kanan">
    <img src="img/d.jpg" alt="" class="img-fluid">
    <p><h2 class="text-primary"> Ikan Air Asin</h2></p>
  </div>
</div>


        
</body>


</html>