<?php 


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../app/function.php">
  </head>
  <body>
    <style>
        .parent {
            position: relative;
            top: 80px;
        }
        .header h4{
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
        .ip{
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
                            <input type="text" autocomplete="off" name="username" placeholder="Masukkan Username" id="user" class="form-control mb-3 ip">

                            <label class="mb-1" for="pw">Password</label>
                            <input type="password" name="password" autocomplete="off" placeholder="Masukkan Password" id="pw" class="form-control ip">

                            <div class="text-end">
                                <a href="" class="text-decoration-none"></a>
                            </div>

                            <div class="footer mt-4 text-center">
                                <button class="btn btn-primary sbt" name="submit" type="submit">Masuk</button>
                                <p>Don't have an account? <a class="text-decoration-none" href="register.php">Register</a> </p>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>