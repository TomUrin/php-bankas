<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/php-bankas/bankas/balance-list/balance-list.php#');
    header('Location: http://localhost/php-bankas/bankas/add-funds/add-funds.php#');
    header('Location: http://localhost/php-bankas/bankas/deduct-funds/deduct-funds.php#');
    header('Location: http://localhost/php-bankas/bankas/add-new-balance/add-new-balance.php#');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/styleForAll.css">
    
</head>
<body>
    <ul class="menu">
        <div class="toggle"><ion-icon name="add-outline"></ion-icon></div>
        <li style="--i:0;" class="active"><a href="http://localhost/php-bankas/bankas/all/all.php#"><ion-icon name="home-outline"></ion-icon></a></li>
        <li style="--i:1;"><a href="http://localhost/php-bankas/bankas/balance-list/balance-list.php#" target="_blank"><ion-icon name="list-circle-outline"></ion-icon></a></li>
        <li style="--i:2;"><a href="http://localhost/php-bankas/bankas/add-funds/add-funds.php#" target="_blank"><ion-icon name="add-circle-outline"></ion-icon></a></li>
        <li style="--i:3;"><a href="http://localhost/php-bankas/bankas/deduct-funds/deduct-funds.php#" target="_blank"><ion-icon name="remove-circle-outline"></ion-icon></a></li>
        <li style="--i:4;"><a href="http://localhost/php-bankas/bankas/add-new-balance/add-new-balance.php#" target="_blank"><ion-icon name="person-add-outline"></ion-icon></a></li>
        <div class="indicator">
        </div>
    </ul>

    <script>
        let menuToggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menu');
        menuToggle.onclick = function () {
            menu.classList.toggle('active')
            menuToggle.classList.toggle('active')
        }

        const list = document.querySelectorAll('li');
        function activeLink () {
            list.forEach((item) => 
            item.classList.remove('active'));
            this.classList.add('active')
        }
        list.forEach((item) => 
        item.addEventListener('click', activeLink))
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>