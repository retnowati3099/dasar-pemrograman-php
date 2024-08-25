<?php
// menggunakan petik satu
echo 'Name: ';
echo 'Retno Wati';

// menggunakan petik ganda
echo "Name: ";
echo "Retno Wati\n";

// string multibaris -> heredoc
echo <<<TEXT
Selamat menjadi anak rantau
Semoga beta di Jakarta, ya :)
TEXT;

echo <<<RETNO
Namaku Retno Wati
AKu punya hobi      coding

RETNO;

// string multibaris -> nowdoc
echo <<<'WATI'
Aku juga suka matematika
Nilai matematikaku bagus lho
pada waktu SMA
WATI;