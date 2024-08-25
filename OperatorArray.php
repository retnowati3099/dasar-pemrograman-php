<?php
// operator union
$first = [
    "firstName" => "Retno"
];
$last = [
    "lastName" => "Wati"
];
$full = $first + $last;
var_dump($full);

// operator equality dan identity
$a = [
    "firstName" => "Retno",
    "lastName" => "Wati"
];

$b = [
    "lastName" => "Wati",
    "firstName" => "Retno"
];
var_dump($a == $b);
var_dump($a === $b);