<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>jenis kelamin</th>
                    <th>tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>email</th>
                    <th>kartu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['jk']?></td>
                        <td><?=$row['tmp_lahir']?></td>
                        <td><?=$row['tgl_lahir']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['kartu_id']?></td>
                        <td>
    <a class="btn btn-primary" href="view_pelanggan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="update_pelanggan.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_pelanggan.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
