<?php
$title = 'ab_list';

require __DIR__. '/db_connect.php';

$stmt = $pdo->query("SELECT * FROM address_book");
$row = $stmt->fetch();
//$row2 = $stmt->fetchAll();
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<div class="container">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">sid</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">mobile</th>
            <th scope="col">birthday</th>
            <th scope="col">address</th>
        </tr>
        </thead>
        <tbody>


        <?php while($r = $stmt->fetch()): ?>
        <tr>
            <td><?= $r['sid'] ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['email'] ?></td>
            <td><?= $r['mobile'] ?></td>
            <td><?= $r['birthday'] ?></td>
            <td><?= $r['address'] ?></td>
        </tr>
        <?php endwhile; ?>

<!--        --><?php //foreach ($row2 as $item): ?>
<!--        <tr>-->
<!--            <td>--><?//= $item['sid'] ?><!--</td>-->
<!--            <td>--><?//= $item['name'] ?><!--</td>-->
<!--            <td>--><?//= $item['email'] ?><!--</td>-->
<!--            <td>--><?//= $item['mobile'] ?><!--</td>-->
<!--            <td>--><?//= $item['birthday'] ?><!--</td>-->
<!--            <td>--><?//= $item['address'] ?><!--</td>-->
<!--        </tr>-->
<!--        --><?php //endforeach; ?>

        </tbody>
    </table>

</div>
<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>