<?php

class Buah
{

    // property
    public $nama;
    public $warna;
};


$pisang = new Buah();
$pisang->nama = "Pisang";
$pisang->warna = "Kuning";

$mangga = new Buah();
$mangga->nama = "Mangga";
$mangga->warna = "Hijau";

echo $mangga->warna;
