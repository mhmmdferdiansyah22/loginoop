<?php
include_once('oop/models/Auth.php');

if(isset($_POST['login'])){
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password']
    ];

    $result = Auth::login($data);
    // die(var_dump($result));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
    body{
      background-image: url("img/y.jpg");
      background-size: cover;
      background-position: center;
    }

    .card-container{
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    </style>
</head>

<body>
    <div class="container p-5 mt-2 col-md-6 mx-auto">
        <?php if(isset($result)) : ?>
            <div class="alert alert-<?php $result["status"]==='error' ? print ("danger") : print ("success")?>">
                <?= $result["message"]?>
            </div>
        <?php endif?>
        
        <div class="card-container p-5">

                <div class="h1 text-white text-center">Login</div>
        
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="fw-bold" for="username"></label>
                        <input class="form-control rounded-pill opacity-50" placeholder="Username" type="text" name="username" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold" for="password"></label>
                        <input class="form-control rounded-pill opacity-50" placeholder="Password" type="password" name="password" id="password" required>
                    </div>
                    <div class="d-grip gap-2">
                        <button name="login" type="submit" class="btn btn-success">Masuk</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="text-center text-white">belum punya akun?<a class="fw-bold text-danger" href="register.php">Register Now<a></div>
            </div>
        </div>
    </div>
</body>
</html>