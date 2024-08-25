<?php
// operasi dot
$name = "Retno";
echo "Hello " . $name . "\n";
echo "Hello " . $name . PHP_EOL;

// casting -> ngubah dari string ke integer / float dan sebaliknya
$intValue = (int) "100";
var_dump($intValue);

$floatValue = (float) "100.0";
var_dump($floatValue);

$stringValue = (string) 100;
var_dump($stringValue);

$salah = (int) "salah";
var_dump($salah); // output: int(0)

// mengakses karakter pada string
$yourName = "dinda";
echo $yourName[0] . PHP_EOL;
echo $yourName[1] . PHP_EOL;
echo $yourName[2] . PHP_EOL;
echo $yourName[3] . PHP_EOL;
echo $yourName[4] . PHP_EOL;

// variabel parsing
$myName = "Retno";
echo "Hello, $myName " . PHP_EOL;
echo "Hello, $myName\n";

// curly brace
$word = "fruit";
echo "I have {$word}s\n";