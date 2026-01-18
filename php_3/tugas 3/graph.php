<?php
echo "=== GRAPH ===<br>";

$graph = [
    "A" => ["B", "C"],
    "B" => [],
    "C" => []
];

foreach ($graph as $node => $connections) {
    echo "Node $node terhubung ke: ";
    echo implode(", ", $connections);
    echo "<br>";
}

echo "<br>";
?>
