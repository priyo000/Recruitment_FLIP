<?php
    include 'Control.php';
    $flip = new flip();
    $data;
    if($_GET['aksi']=='tambah'){
        $data=$flip->post_FLIP();
    }else if($_GET['aksi']=='cek'){
        $data=$flip->cek_FLIP();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HASIL</title>
</head>
<body>
    <h1>ID : <?= $data["id"]; ?></h1>
    <h2>BANK CODE : <?= $data["bank_code"]; ?></h2>
    <h2>AKUN NUMBER : <?= $data["account_number"]; ?></h2>
    <h2>AMOUNT : <?= $data["amount"]; ?></h2>
    <h2>STATUS : <?= $data["status"]; ?></h2>
    <h2>BENEFICIARY NAME : <?= $data["beneficiary_name"]; ?></h2>
    <h2>REMARK : <?= $data["remark"]; ?></h2>
    <h2>RECEIPT : <?= $data["receipt"]; ?></h2>
    <h2>TIMESTAMP : <?= $data["timestamp"]; ?></h2>
    <h2>TIME SERVED : <?= $data["time_served"]; ?></h2>
    <h2>FEE : <?= $data["fee"]; ?></h2>
</body>
</html>