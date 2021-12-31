<?php
include 'database.php';

$obj = new Database();
if (isset($_POST["id"])) {

    $id = $_POST["id"];

    $obj->delete('students', "id='{$id}'");
    $result = $obj->getResult();
    if ($result[0]) {
        echo 1;
    } else {
        echo 0;
    }
}
