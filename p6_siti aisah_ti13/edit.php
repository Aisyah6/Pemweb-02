<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM pelanggan WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir']; 
        $email = $_POST['email'];
        $kartu_id = $_POST['kartu_id'];

        $sql = "UPDATE pelanggan SET kode = :kode, nama = :nama, jk = :jk, tmp_lahir = :tmp_lahir,
                        tgl_lahir = :tgl_lahir, email = :email, kartu_id = :kartu_id WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':kode', $kode);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':jk', $jk);
        $stmt->bindParam(':tmp_lahir', $tmp_lahir);
        $stmt->bindParam(':tgl_lahir', $tgl_lahir);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':kartu_id', $kartu_id);

        $stmt->execute();

        header('Location: index.php');


    }



    $sqljenis = "SELECT * FROM kartu";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();

  
?>


<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Kode</label>
    <input type="text" name="kode" value="<?php echo $row['kode']; ?>">
    <br>
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
    <br>
    <label>Jenis Kelamin</label> :
    <br>
    <label>Laki-Laki</label>
    <input type="radio" name="jk" value="L" checked>

    <br>
    <label>Perempuan</label>
    <input type="radio" name="jk" value="P">


    <br>
    <label>Tempat Lahir</label>
    <input type="text" name="tmp_lahir" value="<?php echo $row['tmp_lahir']; ?>">
    <br>
    <label>Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
    <br>
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>">
    <br>


    <label>Kartu ID</label>
    <select name="kartu_id" id="kartu_id">
        <?php
            while($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $jenis['id'] ?>">         <?= $jenis['nama']  ?>          </option>
        <?php
            }
        ?>


    </select>
    

    <br>
    <button type="submit" name="submit">Save</button>
</form>