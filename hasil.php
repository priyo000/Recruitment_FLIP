<?php
    include 'Control.php';
    $flip = new flip();
    $data;
    if($_GET['aksi']=='tambah'){
        $data=$flip->post_FLIP();
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
    <?php
         var_dump($data);
    ?>
</body>
</html>