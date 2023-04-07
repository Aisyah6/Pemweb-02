<?php
    require_once 'dbkoneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid mt-2">
	<a href="index.php">
        <h2>welcome</h2>
    </a>
    <div class="row mt-3">
        <div class="col-8">
	            <form method="post" action="index.php">
                    <div class="form-group row">
                        <label for="nomor" class="col-4 col-form-label">Nomor</label> 
                        <div class="col-8">
                            <input id="nomor" name="nomor" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control">
                         </div>
                    </div>
                    <div class="form-group row">
                        <label for="kota" class="col-4 col-form-label">Kota</label> 
                        <div class="col-8">
                            <input id="kota" name="kota" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kontak" class="col-4 col-form-label">Kontak</label> 
                        <div class="col-8">
                        <input id="kontak" name="kontak" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
	            </form>
            </div>
        </div>
    </div>
</body>
</html>