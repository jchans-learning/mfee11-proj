<?php
require __DIR__. '/db_connect.php';

$stmt = $pdo->query("SELECT * FROM address_book");

$row = $stmt->fetchALL();
?>

<pre>
    <?php
    print_r($row);
    ?>
</pre>

