<?php

    $mhs1 = ["id"=>1, "nim"=>"01101" , "uts" =>80, "uas"=>90, "tugas"=>95];
    $mhs2 =["id"=>2, "nim"=> "01102", "uts" =>90, "uas"=>85, "tugas"=> 90];
    $mhs3 =["id"=>3, "nim"=>"01103", "uts"=>80, "uas"=>90, "tugas"=>85];
    $mhs4 =["id"=>4, "nim"=>"01104", "uts"=>90, "uas"=>90, "tugas"=>95];
   
   
   
   
    $ar_nilai = [$mhs1, $mhs2, $mhs3, $mhs4];


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">

  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>

    </tr>
  </thead>
  <tbody>
    <?php
        $nomor = 1;
        foreach($ar_nilai as $mhs){
            $nilai_akhir = ( $mhs['uts']+ $mhs['uas']+  $mhs['tugas'] ) / 3;
    ?>
     <tr>
        <td> <?=  $nomor ?>  </td>
        <td> <?= $mhs['nim'] ?> </td>
        <td> <?= $mhs['uts'] ?> </td>
        <td> <?= $mhs['uas'] ?> </td>
        <td> <?= $mhs['tugas'] ?> </td>
        <td> <?= number_format($nilai_akhir,2 ,',',',')  ?> </td>
    </tr>

    <?php
        $nomor++;
    }
   ?>     

   
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

