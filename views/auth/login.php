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
        } else {
            $swal = 1;
            // header('location: ../../index.php');
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

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
</head>

<body>
    <style>
        .parent {
            position: relative;
            top: 70px;

        }

        .header h4 {
            font-weight: lighter;
            font-size: 27px;
            letter-spacing: 0.8px;
        }

        .sbt {
            padding: 5px 130px;
            border-radius: 0;
        }

        .footer p {
            font-size: 13px;
            letter-spacing: 0.4px;
            margin-top: 20px;
        }

        .ip {
            border: none;
            border-bottom: solid 1px gray;
            opacity: 60%;
            box-shadow: none;
        }

        .ip:focus {
            box-shadow: none;
            opacity: 100%;
            border-color: gray;
        }

        .fg {
            font-size: 14px;
        }
    </style>
    <div class="container position-relative parent">
        <div class="row justify-content-center ">
            <div class="col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="header mb-4 text-center">
                                <img src="../../assets/img/loginic.svg" class="mt-4 mb-4" width="90px" alt="">
                                <h4>Sign In To CRUD</h4>
                            </div>
                            <label for="user" class="mb-1">Username</label>
                            <input type="text" autocomplete="off" name="username" placeholder="Masukkan Username" required id="user" class="form-control mb-3 ip">

                            <label class="mb-1" for="pw">Password</label>
                            <input type="password" name="password" required autocomplete="off" placeholder="Masukkan Password" id="pw" class="form-control ip">

                            <div class="text-end">
                                <a href="../helper/forgot.php" class="text-decoration-none fg">Forgot Password?</a>
                            </div>

                            <div class="footer mt-4 text-center">
                                <button class="btn btn-primary sbt" onclick="kanjut()" name="submit" type="submit">Masuk</button>
                                <p>Don't have an account? <a class="text-decoration-none" href="register.php">Register</a> </p>
                                <button onclick="anime()">tes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function anime() {
            swal("Good job!", "Kamu Berhasil Login!", "success")
        }

        function kanjut() {
            swal("Good job!", "Kamu Berhasil Login!", "success")
        }
    </script>
    <?php
    if (isset($swal)) {
        echo "<script>kanjut()</script>";
    }
    ?>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js%22%3E</script>

</body>

</html>