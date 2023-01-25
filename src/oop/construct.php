<?php

class Buah
{

    // property
    public $nama;
    public $warna;

    // function __construct($a, $b)
    // {
    //     $this->nama = $a;
    //     $this->warna = $b;
    // }
};


$pisang = new Buah("Pisang", "Kuning");

echo "<br/>$pisang->warna";
echo "<br/>$pisang->nama";
