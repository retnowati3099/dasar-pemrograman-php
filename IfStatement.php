<?php
$nilai = 87;

if ($nilai >= 90 && $nilai <= 100){
    echo "Nilai Anda A\n";
} else if ($nilai >= 80){
    echo "Nilai Anda B\n";
}elseif ($nilai >= 70){
    echo "Nilai Anda C\n";
} else if ($nilai >= 60){
    echo "Nilai Anda D\n";
} else {
    echo "Nilai Anda E\n";
}

// if tanpa kurung kurawal, menggunakan titik dua dan elseif digabung
if ($nilai >= 90 && $nilai <= 100):
    echo "Nilai Anda A\n";
elseif ($nilai >= 80):
    echo "Nilai Anda B\n";
elseif ($nilai >= 70):
    echo "Nilai Anda C\n";
elseif ($nilai >= 60):
    echo "Nilai Anda D\n";
else:
    echo "Nilai Anda E\n";
endif;