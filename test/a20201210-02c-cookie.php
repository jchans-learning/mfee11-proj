<?php
if (isset($_COOKIE['mycookie'])) {
    $myc = $_COOKIE['mycookie'] + 1;
} else {
    $myc = 1;
}
setcookie("mycookie", $myc);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $myc ?>
</body>

</html>