<?php
echo "=== ARRAY ===<br>";

$nilai = [80, 85, 90, 75, 88];

echo "Isi Array:<br>";
foreach ($nilai as $n) {
    echo $n . "<br>";
}

$total = array_sum($nilai);
$rata = $total / count($nilai);

echo "Total Nilai = $total<br>";
echo "Rata-rata = $rata<br><br>";
?>
