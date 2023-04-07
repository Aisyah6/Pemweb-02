<?php
    require_once 'dbkoneksi.php';

    $sql = "SELECT * FROM vendor";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if(isset($_POST['submit'])){
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $kontak = $_POST['kontak'];


        $sql = "INSERT INTO vendor (nomor, nama, kota, kontak) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nomor, $nama, $kota, $kontak]);

        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-2">
    <a href="form.php">
        <h4>Tambah data vendor</h4>
    </a>
 
        <div class="row mt-3">
            <div class="col-8">
                <table class="table shadow p-3 mb-5 bg-white rounded">
                    <thead  class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Kontak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $number = 1;
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
                        ?>
                        <tr>
                            <td><?= $number ?></td>
                            <td><?= $row['nomor'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['kota'] ?></td>
                            <td><?= $row['kontak'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                <a href="delete.php?id=<?= $row['id'] ?>"  
                                    onclick="if(!confirm('Anda Yakin Hapus Data <?=$row['nama']?>?')) {return false}"
                                >
                                    DELETE
                                </a>
                            </td>
                        </tr>
                        <?php 
                            $number++;
                            endwhile
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>