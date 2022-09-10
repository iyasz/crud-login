<?php
include "../../app/db.php";


if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $checkUser = $conn->query("SELECT * FROM tbl_admin where username = '$username'");
    $checkPassword = $conn->query("SELECT * FROM tbl_admin where password = '$password'");

    if (mysqli_num_rows($checkUser) <= 0) {
        echo "<script>alert('Username Tidak Terdaftar');</script>";
    } else {
        if (mysqli_num_rows($checkPassword) <= 0) {
            echo "<script>alert('Password anda salah');</script>";
        }else{
            header('location: ../../index.php');
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../app/views.php">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
</head>

<body>
    <style>
        .parent {
            position: relative;
            top: 70px;
        }
    </style>
    <div class="container position-relative parent">
        <div class="row justify-content-center ">
            <div class="col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="" method="post">
                            
                            <label for="user" class="mb-1">Username</label>
                            <input type="text" autocomplete="off" name="username" placeholder="Masukkan Username" required id="user" class="form-control mb-3 ip">

                            <label class="mb-1" for="pw">Password</label>
                            <input type="password" name="password" required autocomplete="off" placeholder="Masukkan Password" id="pw" class="form-control ip">

                            <div class="text-end">
                                <a href="../helper/forgot.php" class="text-decoration-none fg">Forgot Password?</a>
                            </div>

                            <div class="footer mt-4 text-center">
                                <button class="btn btn-primary sbt" name="submit" type="submit">Masuk</button>
                                <p>Don't have an account? <a class="text-decoration-none" href="register.php">Register</a> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

</body>

</html>