<?php

function cetakBilangan($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024\n";
        } elseif ($i % 5 == 0) {
            echo "2024\n";
        } elseif ($i % 4 == 0) {
            echo "Pemrograman\n";
        } elseif ($i % 6 == 0) {
            echo "Website\n";
        } else {
            echo "$i\n";
        }
    }
}

echo "Masukkan bilangan bulat positif n: ";
$n = trim(fgets(STDIN));

if (is_numeric($n) && $n > 0) {
    cetakBilangan((int)$n);
} else {
    echo "Input harus bilangan bulat positif.\n";
}

?>