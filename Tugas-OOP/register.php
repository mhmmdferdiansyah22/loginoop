<?php
include_once('oop/models/Auth.php');

if(isset($_POST['register'])){
    $data = [
        "name" => $_POST["name"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "password_confirm" => $_POST["password_confirm"],
    ];

    $register = Auth::register($data);
    
    if($register["status"] === "success") {
        header("Location: login.php");
    }
    else{
        header("Location: register.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Register</title>
    <style>
    body{
      background-image: url("img/th.jpg");
      background-size: cover;
      background-position: center;
    }

    .card-container{
        backdrop-filter: blur(70px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    </style>
</head>
<body>
  

    <div class="card-container p-5 mt-5 col-md-5 mx-auto">
            <div class="h1 text-white text-center">Registrasi</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name"></label>
                    <input type="text" placeholder="Name" name="name" id="name" class="form-control text-dark rounded-pill opacity-50" required>
                </div>
                <div class="mb-3">
                    <label for="username"></label>
                    <input type="text" placeholder="Username" name="username" id="username" class="form-control rounded-pill opacity-50" required>
                </div>
                <div class="mb-3">
                    <label for="password"></label>
                    <input type="password" placeholder="Password" name="password" id="password" class="form-control rounded-pill opacity-50" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirm"></label>
                    <input type="password" placeholder="Confirm Password" name="password_confirm" id="password_confirm" class="form-control rounded-pill opacity-50" required>
                </div>
                <div class="d-grip gap-2">
                    <button name="register" class="btn btn-primary text-white" type="submit">Daftar</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
        <div class="text-center text-white">sudah punya akun?<a class="fw-bold text-warning" href="login.php">Login Now<a></div>
        </div>
    </div>

</body>
</html>