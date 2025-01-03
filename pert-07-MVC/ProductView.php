<?php
require_once 'ProductModel.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ini-test{
            font-size: 500px;
            /* margin-top: 0; */
        }
    </style>
</head>
<body>
    <h1>DATA PRODUK</h1>
    <table border="1" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
        <?php $i = 1?>
        <?php foreach ($productList as $prd): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $prd->getName(); ?></td>
            <td><?php echo $prd->getPrice(); ?></td>
            <td><?php echo $prd->getDescription(); ?></td>
        </tr>
        <?php $i++?>
        <?php endforeach;?>
    </table>

    
    <?php ProductModel::sayHelloBig();?>

</body>
</html>