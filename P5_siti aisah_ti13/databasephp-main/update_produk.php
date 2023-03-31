<?php 
require_once 'dbkoneksi.php';
?>

<?php   
    // $proses = $_GET['proses'];
    // if ($proses == 'View') 
    // {
  
    //   $_id = $_GET['idedit'];

    //   $sql = "SELECT * FROM produk WHERE id=?";
    //   $st = $dbh->prepare($sql);
    //   $st->execute([$_id]);
    //   $row = $st->fetch();
    // }

    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    $_id = $_GET['idedit'];

    $sql = "SELECT * FROM produk WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

    $simpan = $_GET['simpan'];

    if (isset($simpan)) 
    { 
      $_kode = $_GET['kode'];
      $_nama = $_GET['nama'];
      $_harga = $_GET['harga_beli'];
      $_stok = $_GET['stok'];
      $_minstok = $_GET['min_stok'];
      $_jenis = $_GET['jenis'];
   
      // array data
      $ar_data[]=$_kode; // ? 1
      $ar_data[]=$_nama; // ? 2
      $ar_data[]=$_harga;// 3
      $ar_data[]= 1.2 * $_harga;
      $ar_data[]=$_stok;
      $ar_data[]=$_minstok;
      $ar_data[]=$_jenis; // ? 7

      $ar_data[]=$_GET['idedit'];// ? 8
      $sql = "UPDATE produk SET 
              kode = ?,
              nama = ?,
              harga_beli = ?,
              harga_jual = ?,
              stok = ?,
              min_stok = ?,
              jenis_produk_id = ? WHERE id = ?";

      if(isset($sql)){
          $st = $dbh->prepare($sql);
          $st->execute($ar_data);

          // echo 'Berhasil Update Data';
          header('location:list_produk.php');
        
      }
    }
?>
          
<form method="GET" action="">
  <input type="hidden" name="idedit" value='<?= $row['id'] ?>'>
  <input type="hidden" name="simpan" value='simpan'>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?= $row['kode'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?= $row['nama'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="harga_beli" name="harga_beli" 
        value="<?= $row['harga_beli'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="stok" value="<?= $row['stok'] ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="min_stok" name="min_stok" 
        value="<?= $row['min_stok'] ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="jenis" name="jenis" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option 
              value="<?=$rowjenis['id']?>" 
              <?php if($rowjenis['id'] == $row['jenis_produk_id']) : ?>
                selected
              <?php endif; ?>
            >
            <?=$rowjenis['nama']?>
          </option>
         <?php
            }
        ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
