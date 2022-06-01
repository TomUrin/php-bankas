<?php
$addFunds = 0;
if(isset($_POST['submit'])) {
    $newAccount = array(
        "name" => $_POST['name'],
        "surname" => $_POST['surname'],
        "number" => $_POST['number'],
        "id" => $_POST['id'],
        "balance" => $addFunds,
    );
    if(filesize("accounts.json") == 0) {
        $firstAccount = array($newAccount);
        $dataToSave = $firstAccount;
    } else {
        $oldAccounts = json_decode(file_get_contents("accounts.json"));
        array_push($oldAccounts, $newAccount);
        $dataToSave = $oldAccounts;
    };
    !file_put_contents("accounts.json", json_encode($dataToSave, JSON_PRETTY_PRINT));
}

?>