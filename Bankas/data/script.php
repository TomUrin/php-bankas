<?php

if(isset($_POST['submit'])) {
    $newAccount = array(
        "name" => $_POST['name'],
        "surname" => $_POST['surname'],
        "number" => $_POST['number'],
        "id" => $_POST['id'],
    );
    if(filesize("accounts.json") == 0) {
        $firstAccount = array($newAccount);
        $dataToSave = $firstAccount;
    } else {
        $oldAccounts = json_decode(file_get_contents("accounts.json"));
        array_push($oldAccounts, $newAccount);
        $dataToSave = $oldAccounts;
    };
    if(!file_put_contents("accounts.json", json_encode($dataToSave, JSON_PRETTY_PRINT), LOCK_EX)) {
        $error = "ERROR creating account, please try again";
    } else {
        $success = "Account create succesfully";
    }
}

?>