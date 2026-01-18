<?php
echo "=== SINGLE LINKED LIST ===<br>";

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

$node1 = new Node(10);
$node2 = new Node(20);
$node3 = new Node(30);

$node1->next = $node2;
$node2->next = $node3;

$current = $node1;
while ($current != null) {
    echo $current->data . "<br>";
    $current = $current->next;
}

echo "<br>";
?>
