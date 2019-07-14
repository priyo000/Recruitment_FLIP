<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rquest</title>
</head>
<body>
    <h1>REQUEST DISBURSEMENT</h1>
    <form action="hasil.php?aksi=tambah" method="post">
        BANK CODE <br>
        <input type="text" name="bank_code" required><br><br>
        ACCOUNT NUMBER <br>
        <input type="number" name="account_number" required><br><br>
        AMOUNT <br>
        <input type="number" name="amount" required><br><br>
        REMARK <br>
        <input type="text" name="remark" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>