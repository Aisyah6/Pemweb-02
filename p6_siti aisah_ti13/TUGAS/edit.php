<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM vendor WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    if(isset($_POST['submit'])){
        $id= $_POST['id'];
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $kota= $_POST['kota'];
        $kontak = $_POST['kontak'];
        
        $sql = "UPDATE vendor SET nomor = :nomor, nama= :nama, kota= :kota,
                        kontak = :kontak WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nomor', $nomor);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':kota', $kota);
        $stmt->bindParam(':kontak', $kontak);
       
        $stmt->execute( );

        header('Location: index.php');
        }
    

  
?>


<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>nomor</label>
    <input type="text" name="nomor" value="<?php echo $row['nomor']; ?>">
    <br>
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
    <br>
    
    <br>
    <label>kota</label>
    <input type="text" name="kota" value="<?php echo $row['kota']; ?>">
    <br>
    <label>kontak</label>
    <input type="text" name="kontak" value="<?php echo $row['kontak']; ?>">
    <br>
    

    <br>
    <button type="submit" name="submit">Save</button>
</form>