<?php

    $accounts = file_get_contents('../add-new-balance/accounts.json');

    $data = json_decode($accounts, true);

    usort($data, function($a, $b){
        if ($a['surname'] < $b['surname']) {
            return -1;
        }
        if ($a['surname'] > $b['surname']) {
            return 1;
        }
        return 0;
    });

    foreach($data as $key => $account) {
        $num = $key + 1;
        $name = $account['name'];
        $surname = $account['surname'];
        $number = $account['number'];
        $id = $account['id'];
        $balance = $account['balance'];
    
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
                        foreach($data as $key => $account) {
                            $name = $account['name'];
                    ?>
                    <?php 
                        echo "<p>$name</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>Surname</h2>
                    <?php
                        foreach($data as $key => $account) {   
                            $surname = $account['surname'];
                    ?>
                    <?php 
                        echo "<p>$surname</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>Account number</h2>
                    <?php
                        foreach($data as $account) {
                            $number = $account['number'];
                    ?>
                    <?php 
                        echo "<p class='acc'>$number</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>ID</h2>
                    <?php
                        foreach($data as $account) {
                            $id = $account['id'];
                    ?>
                    <?php 
                        echo "<p>$id</p>";
                        }
                    ?>
            </div>
            <div class="colBalance">
                <h2 >Balance</h2>
                    <?php
                        foreach($data as $account) {
                            $balance = $account['balance'];
                    ?>
                    <?php 
                        echo "<p>$balance</p>";
                        }
                    ?>
            </div>
            <div class="colBalance">
                <h2>DELETE</h2>
                    <?php
                        foreach($data as $account) {
                    ?>
                    <?php 
                        echo "<button class='btnDel' type='submit'>Delete</button>";
                        }
                    ?>
            </div>
        </div>
    </div>
    <div class="list">
        <button class="btnAdd" type="submit">
            <a class="link" href="http://localhost/php-bankas/bankas/add-funds/add-funds.php#">Add funds</a>
        </button>
        <button class="btnDed" type="submit">
            <a class="link" href="http://localhost/php-bankas/bankas/deduct-funds/deduct-funds.php#">Deduct funds</a>
        </button>
    </div>
</body>
</html>