<?php
if(isset($_POST['submit'])) {
    header('Location: http://localhost/php-bankas/bankas/balance-list/balance-list.php');
}

$accounts = file_get_contents('../add-new-balance/accounts.json');

    $data = json_decode($accounts, true);

$result = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/addFunds.css">
    <title>Add funds</title>
</head>
<body>
    <section>
        <div class="container">
            <h2>+ MONEY</h2>
            <div class="row100">
                <form class="col" method="POST" type="submit">
                    <div class="inputBox">
                        <input type="text" name="value" required="required"><?php $result ?></input>
                        <span class="text">Sum</span>
                        <span class="line"></span>
                    </div>
                    <button class="add" type="submit" name="sub" value="send">SEND</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>