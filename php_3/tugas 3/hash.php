<?php
echo "=== HASH TABLE ===<br>";

$hashTable = [
    "2311001" => "Ahmad Fauzi",
    "2311002" => "Siti Aisyah",
    "2311003" => "Muhammad Rizki"
];

foreach ($hashTable as $nim => $nama) {
    echo "NIM: $nim - Nama: $nama<br>";
}
?>
