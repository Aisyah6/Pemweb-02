<?php
    require_once 'dbkoneksi.php' ;

    $sql = " SELECT * FROM pelanggan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    
    if(isset($_POST['submit'])){
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $email = $_POST['email'];
        $kartu_id = $_POST['kartu_id'];

    $sql = "INSERT INTO pelanggan (kode, nama, jk, tmp_lahir, tgl_lahir, email, kartu_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$kode, $nama, $jk, $tmp_lahir, $tgl_lahir, $email, $kartu_id]);

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
</head>
<body>
    <a href="form.php">Tambah Pelanggan</a>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Email</th>
                <th>ID Kartu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $number = 1;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>

            <tr>
                <td> <?=  $number           ?>                            </td>
                <td> <?=  $row['kode']      ?>                            </td>
                <td> <?=  $row['nama']      ?>                            </td>
                <td> <?=  $row['jk']        ?>                            </td>
                <td> <?=  $row['tmp_lahir'] ?>, <?=  $row['tgl_lahir'] ?> </td>
                <td> <?=  $row['email']     ?>                            </td>
                <td> <?=  $row['kartu_id']  ?>                            </td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">EDIT</a>
                    <a href="delete.php?id=<?= $row['id'] ?>"  
                        onclick="if(!confirm('Anda Yakin Hapus Data <?=$row['nama']?>?')) {return false}"
                    >
                        HAPUS
                    </a>
                </td>
            </tr>

            <?php   
                $number++;
                endwhile;
            ?>
        </tbody>
    </table>
</body>
</html>