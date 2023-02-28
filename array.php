<?php

// Array index 
$animals = ['Macan', 'Kucing', 'Beruang', 'Ayam'];

// menambahkan data ke array
array_push($animals, "kambing");

// Mengakses array index
echo $animals[2];

// Array Asosiatif
$animal = [
    'nama' => $animals[2],
    'jenis'=> 'Karnivora',
    'usia' => "4 bulan"
];

// mengakses array assosiatif
echo $animal['nama'];