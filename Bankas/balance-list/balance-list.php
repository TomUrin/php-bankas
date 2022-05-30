<?php

    $accounts = file_get_contents('../add-new-balance/accounts.json');

    $decoded_data = json_decode($accounts, true);

    foreach($decoded_data as $account) {
    $name = $account['name'];
    $surname = $account['surname'];
    $number = $account['number'];
    $id = $account['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance list</title>
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/styleForBL.css">
    
</head>

<body>
    <h1 class="text">Accounts</h1>   
    <div class="all">
        <div class="container">
            <div class="col">
                <h2>Name</h2>
                    <?php
                        foreach($decoded_data as $account) {
                        $name = $account['name'];
                        $surname = $account['surname'];
                        $number = $account['number'];
                        $id = $account['id'];
                    ?>
                    <?php 
                        echo "<p>$name</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>Surname</h2>
                    <?php
                        foreach($decoded_data as $account) {
                        $name = $account['name'];
                        $surname = $account['surname'];
                        $number = $account['number'];
                        $id = $account['id'];
                    ?>
                    <?php 
                        echo "<p>$surname</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>Number</h2>
                    <?php
                        foreach($decoded_data as $account) {
                        $name = $account['name'];
                        $surname = $account['surname'];
                        $number = $account['number'];
                        $id = $account['id'];
                    ?>
                    <?php 
                        echo "<p>$number</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>ID</h2>
                    <?php
                        foreach($decoded_data as $account) {
                        $name = $account['name'];
                        $surname = $account['surname'];
                        $number = $account['number'];
                        $id = $account['id'];
                    ?>
                    <?php 
                        echo "<p>$id</p>";
                        }
                    ?>
            </div>
        </div>
    </div>
    <div class="list">
        <button class="btnDel" type="submit">Delete account</button>
        <button class="btnAdd" type="submit">
            <a class="link" href="http://localhost/php-bankas/bankas/add-funds/add-funds.php#">Add funds</a>
        </button>
        <button class="btnDed" type="submit">
            <a class="link" href="http://localhost/php-bankas/bankas/deduct-funds/deduct-funds.php#">Deduct funds</a>
        </button>
    </div>
</body>
</html>