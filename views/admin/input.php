<?php

$conn = mysqli_connect('localhost', 'root', '', 'crudlog');

$select = $conn->query("SELECT * FROM anggota");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="header">
                                <h3>Form Penginputan Data</h3>
                            </div>
                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" placeholder="" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="username">Username</label>
                                <input type="text" name="username" placeholder="" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="telp">No Telp</label>
                                <input type="number" name="telpon" placeholder="" class="form-control" id="telp">
                            </div>
                            <div class="mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" placeholder="" class="form-control" id="alamat">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>No. Telp</th>
                                    <th>Alamat</th>
                                    <th>Passwordd</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach($select as $selects) { ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>