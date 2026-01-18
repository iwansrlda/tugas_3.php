<?php
echo "=== BINARY TREE ===<br>";

class TreeNode {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

$root = new TreeNode("Root");
$root->left = new TreeNode("Kiri");
$root->right = new TreeNode("Kanan");

function tampilTree($node) {
    if ($node != null) {
        echo $node->data . "<br>";
        tampilTree($node->left);
        tampilTree($node->right);
    }
}

tampilTree($root);

echo "<br>";
?>
