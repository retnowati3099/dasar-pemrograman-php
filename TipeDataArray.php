<?php
// inisialisasi tipe data array 

$numbers = array(1, 2, 3, 4);
var_dump($numbers);

$names = ["Retno", "Dinda", "Salma", "Alfa"];
var_dump($names);

$arr = [1, "dua", false, 1.5];  // array dengan berbagai tipe data di dalamnya
var_dump($arr);

$colors = ["black", "red", "blue", "green"];

// mengakses elemen indeks ke-0
echo $colors[0] . "\n";

// menambahkan elemen indeks terakhir
$colors[] = "purple";
var_dump($colors);

// menghapus elemen indek ke-2
unset($colors[2]);
var_dump($colors);

// panjang array
echo count($colors) . "\n";


// map
$animals = array(
    "animal1" => "cow",
    "animal2" => "goat",
    "animal3" => "bird"
);
var_dump($animals);
var_dump($animals["animal2"]);

$fruits = [
    "fruits1" => "banana",
    "fruits2" => "papaya",
    "fruits3" => "apple"
];
var_dump($fruits);
var_dump($fruits["fruits1"]);

// array di dalam array
$employee = array(
    "id" => 1,
    "name" => "Retno Wati",
    "age" => 25,
    "address" => [
        "city" => "Yogyakarta",
        "country" => "Indonesia"
    ]
);
var_dump($employee);
var_dump($employee["address"]);
var_dump($employee["address"]["city"]);