<?php
$x = 30;
$y = 50;
$z = 30;

echo "Operator Aritmatika";
echo "<br /> Hasil Tambah $x + $y = " . $x + $y;
echo "<br/> Hasil Kurang $x - $y = " . $x - $y;
echo "<br/> Hasil Kali $x * $y = " . $x * $y;
echo "<br/> Hasil Bagi $x / $y = " . $x / $y;
echo "<br/> Hasil Modulus $x % $y = " . $x % $y;

echo "<br/> <br/>  operator komparasi <br/>";
echo var_dump($x === $z);

echo "<br/> <br/> IF ELSE <br/>";

if ($x > $y) {
    echo "X lebih dari Y";
} else {
    echo "X kurang dari Y";
};

echo "<br/> <br/> IF ELSE <br/>";

if ($x > $y) {
    echo "X lebih dari Y";
} else if ($x === $y) {
    echo "X sama dengan Y";
} else if ($x !== $y) {
    echo "X tidak sama dengan Y";
} else if ($x >= $y) {
    echo "X lebih dari sama dengan Y";
} else {
    echo "X kurang dari Y";
};

echo "<br/>";

$andi = 30;
$eko = 20;

if ($andi > $eko) {
    echo "Umur Andi lebih tua dari Eko";
} else {
    echo "Umur Eko lebih tua dari Andi";
};
