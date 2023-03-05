<?php
   $nama = $_POST ['nama'];
   $matkul = $_POST ['matkul'];
   $uts = $_POST ['uts'];
   $uas = $_POST ['uas'];
   $tugas = $_POST ['tugas'];
   $hasilnilai = ($uts + $uas + $tugas) / 3;

   echo 'Nama Lengkap :' . $nama;
   echo '<br>Mata Kuliah :' . $matkul;
   echo '<br>Nilai UTS :' . $uts;
   echo '<br>Nilai UAS :' . $uas;
   echo '<br>Nilai Tugas :' . $tugas;


   if( $hasilnilai >= 0 && $hasilnilai <= 50) {
    echo '<br> Nilai :' . $hasilnilai . '<br> Grade : E';

   } elseif($hasilnilai >= 50 && $hasilnilai <= 60)  {
    echo '<br> Nilai :' . $hasilnilai . '<br> Grade : C';

   } elseif($hasilnilai >= 60  && $hasilnilai <= 70)  {
    echo '<br> Nilai :' . $hasilnilai . '<br> Grade : B-';

   } elseif($hasilnilai >= 70 && $hasilnilai <= 80)  {
    echo '<br> Nilai :' . $hasilnilai . '<br> Grade : B';

   }  elseif($hasilnilai >= 80 && $hasilnilai <= 90)  {
    echo '<br> Nilai :' . $hasilnilai . '<br> Grade : A-';

   } else {
    echo '<br> Nilai :' . $hasilnilai . '<br> Grade :A';

}
?>