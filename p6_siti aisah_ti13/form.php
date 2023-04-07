<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM kartu";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<a href="index.php">
        <h2>HOME</h2>
    </a>
	<form method="post" action="index.php">
		<label for="kode">Kode:</label>
		<input type="text" id="kode" name="kode"><br><br>
		
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		
		<label for="jk">Jenis Kelamin:</label>
        <br>
        <label>Laki-Laki</label>
        <input type="radio" name="jk" value="L" checked>

        <br>
        <label>Perempuan</label>
        <input type="radio" name="jk" value="P"><br><br>

        <label for="tmp_lahir">Tempat Lahir:</label>
		<input type="text" id="tmp_lahir" name="tmp_lahir"><br><br>

        <label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>

        <label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>

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

        <br><br>
		
		<input type="submit" value="Simpan" name="submit">
	</form>
</body>
</html>