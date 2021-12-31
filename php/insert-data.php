<?php

include 'database.php';

$obj = new Database();

if (isset($_POST['name']) || isset($_POST['age']) || isset($_POST['city'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    $obj->insert('students', ['name' => $name, 'age' => $age, 'city' => $city]);

    $data = $obj->getResult();
    if ($data[0]) {
        echo 1;
    } else {
        echo 0;
    }
}
