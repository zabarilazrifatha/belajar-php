<?php
//Tugas1
$bilangan = 100;
$pembagi = 3;

echo "hasil pembagian: " . ($bilangan / $pembagi) . "<br/>";
echo "sisa bagi: " .($bilangan % $pembagi) . "<br/>";

//Tugas2
$saldoawal = 1000000;
$bunga = 0.03;
$bulan = 11;
$saldoakhir = $saldoawal + ($saldoawal * $bunga * $bulan);                                         

echo "saldo akhir setelah ".$bulan."bulan adalah : Rp. ".$saldoakhir.",-";


?>
