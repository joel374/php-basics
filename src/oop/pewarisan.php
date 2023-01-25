<?php

class Buah
{

    // property
    public $nama;
    public $warna;
};

// pewarisan
class Pisang extends Buah
{
    function tampilDeskripsi()
    {
        echo "Halo saya buah $this->nama dengan warna $this->warna";
    }
}

$pisang = new Pisang();
$pisang->nama = "Pisang";
$pisang->warna = "Kuning";

$pisang->tampilDeskripsi();
