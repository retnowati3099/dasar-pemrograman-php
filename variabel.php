<?php
$name = "Retno";
$age = 25;

echo "Name: ";
echo $name;

echo "\n";

echo "Age: ";
echo $age;

echo "\n";

$status = "marriage";
echo "status: $status\n";

// menghapus variabel
unset($status);

// mencek apakah variabel ada dan nilainya tidak null -> isset($variabel)
$color = "black";
var_dump(isset($color)); // variabel ada (true), nilainya tidak null (true), true and true -> true

$color = null;
var_dump(isset($color)); // variabel ada (true), nilai null (false), true and false -> false
var_dump(is_null($color)); // karena nilai variabel $color null, maka true

unset($color); // menghapus variabel $color

var_dump(isset($color)); // variabel tidak ada (false) -> false
