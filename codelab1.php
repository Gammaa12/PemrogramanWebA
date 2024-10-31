<?php

// Function to generate spaces
function generateSpaces($num) {
    return str_repeat(" ", $num);
}

// Function to generate asterisks
function generateAsterisks($num) {
    return str_repeat("*", $num);
}

// 1. SEGITIGA SAMA SISI (Equilateral Triangle)
echo "1. SEGITIGA SAMA SISI\n";
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    echo generateSpaces($rows - $i) . generateAsterisks(2 * $i - 1) . "\n";
}

echo "\n";

// 2. SEGITIGA SAMA SISI TERBALIK (Inverted Equilateral Triangle)
echo "2. SEGITIGA SAMA SISI TERBALIK\n";
for ($i = $rows; $i >= 1; $i--) {
    echo generateSpaces($rows - $i) . generateAsterisks(2 * $i - 1) . "\n";
}

?>