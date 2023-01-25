<?php

class Buah
{

    // property
    public $nama;
    public $warna;

    function tampilDeskripsi()
    {
        echo "<br/> Nama Buah $this->nama dengan warna $this->warna";
    }
};


$pisang = new Buah();
$pisang->nama = "Pisang";
$pisang->warna = "Kuning";

$mangga = new Buah();
$mangga->nama = "Mangga";
$mangga->warna = "Hijau";

echo "<br/>$mangga->warna";
echo $pisang->tampilDeskripsi();
