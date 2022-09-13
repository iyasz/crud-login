<?php


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
            echo '<script>
                setInterval(function () {
                    window.location.href="index.php?page=register"
                }, 2000);
            </script>';
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            border-radius: 0;
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
        // Swal.fire(
        //     'Good job!',
        //     'You clicked the button!',
        //     'success'
        // )
    </script>

    <?php
    if (isset($swal)) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Anda Telah Berhasil Login',
            showConfirmButton: false,
            timer: 2000
          })
            </script>";
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>

</html>