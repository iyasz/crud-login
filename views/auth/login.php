<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <style>
        .parent {
            position: relative;
            top: 130px;
        }
    </style>
    <div class="container position-relative parent">
        <div class="row justify-content-center ">
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="header mb-4 text-center">
                                <img src="" alt="">
                                <h4>Sign In To CRUD</h4>
                            </div>
                            <label for="user">Username</label>
                            <input type="text" name="username" placeholder="Masukkan Username" id="user" class="form-control mb-3">

                            <label for="pw">Password</label>
                            <input type="password" name="pw" placeholder="Masukkan Password" id="pw" class="form-control">

                            <div class="footer mt-3">
                                <button class="btn btn-primary">Masuk</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
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