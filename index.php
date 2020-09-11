<?php

echo "Hewan <br>";
echo "<hr>";

class Kucing{
 	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
 }
 $Kucing = new Kucing;
 $Kucing->nama = "Rinda";
 $Kucing->jumlah_kaki = "4";
 $Kucing->bisa_terbang = "tidak";
 $Kucing->suara = "meoooong";

 echo "Kucing <br>";
 echo "Nama : $Kucing->nama <br>";
 echo "Jumlah Kaki : $Kucing->jumlah_kaki <br>";
 echo "Bisa Terbang : $Kucing->bisa_terbang <br>";
 echo "Suara : $Kucing->suara <br>";
 echo "<hr>";