<?php
// membuat fungsi
function sayHello(){
    echo "Hello Retno!" . PHP_EOL;
}

// memanggil fungsi
sayHello();
sayHello();

// memanggil fungsi
sayHai();

// membuat fungsi
function sayHai(){
    echo "Hai Retno!" . PHP_EOL;
}

$condition = true;

if ($condition){
    function sayGood(){
        echo "Good job, Retno!" . PHP_EOL;
    }
}

sayGood();

// function dengan parameter
function message($name){
    echo "Tetap semangat $name" . PHP_EOL;
}

// pemanggilan fungsi dengan argumen
message("Dinda");

// default argument value
function msg($name = "Anonymous"){
    echo "Jangan menyerah, $name" . PHP_EOL;
}

// pemanggilan fungsi
msg();
msg("Namira");

// lokasi function
// fungsi di dalam if
$condition = true;
if ($condition){
    function hi(){
        echo "Good job" . PHP_EOL;
    }
}

hi();

// type declaration
function sum(int $num1, int $num2){
    $total = $num1 + $num2;
    echo "number 1 + number 2 = $num1 + $num2 = $total" . PHP_EOL;
}

sum(2, 5);
sum("3", "8");
sum(true, false);

// variabel argument list
function sumAll(...$value){
    $total = 0;
    foreach($value as $val){
        $total += $val;
    }
    echo "total dari " . implode(", ", $value) . " = $total" . PHP_EOL;
}
sumAll(1, 2, 3, 4, 5);

$numbers = [2, 4, 6, 8];
sumAll(...$numbers);
sumAll(...[3, 5, 7, 9]);

// function return value (nilai kembalian)
function multiply($num1, $num2){
    return $num1 * $num2;
}
$res = multiply(3, 5);
echo $res . "\n";

// return value dengan tipenya
function pangkat(int $num1, int $num2): int {
    return $num1 ** $num2;
}
$resPangkat = pangkat(2, 3);
echo $resPangkat . "\n";