<?php

//Read the content of a JSON file

$accounts = file_get_contents('././add-new-ballance/accounts.json');

//Decode the JSON data into an array

$decoded_data = json_decode($accounts, true);

echo "<b>ID Name Departmen Batch</b><br/>";

//Print the JSON data

foreach($decoded_data as $account) {

$name = $student['name'];

$surname = $student['surname'];

$number = $student['number'];

$id = $student['id'];

echo "$name $surname $number $id<br/>";

}

?>