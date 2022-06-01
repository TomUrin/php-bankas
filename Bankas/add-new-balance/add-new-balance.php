<?php
require("../data/script.php");
if(isset($_POST['submit'])) {
    header('Location: http://localhost/php-bankas/bankas/balance-list/balance-list.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/newBalance.css">
    <title>Add new balance</title>
</head>
<body>
    <form method="POST" action="" type="submit">
        <div class="container">
            <h2>Add new bank account</h2>
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="name" required="required"></input>
                    <span class="text">Name</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="surname" required="required"></input>
                    <span class="text">Surname</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="number" value="LT<?php echo mt_rand(10, 99) ?> <?php echo mt_rand(1000, 9999) ?> <?php echo mt_rand(1000, 9999) ?> <?php echo mt_rand(1000, 9999) ?> <?php echo mt_rand(1000, 9999) ?>"/>
                    <span class="text">Account number</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputBox">
                    <input type="text" name="id" required="required"></input>
                    <span class="text">Personal ID</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row100">
            <div class="col">
                <button class="add" type="submit" name="submit" value="send">SEND</button>
            </div>
        </div>
</div>
        </form>
        
</body>
</html>