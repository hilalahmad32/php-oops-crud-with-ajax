<?php
include 'database.php';

$obj = new Database();

$obj->select('students','*','id DESC');
$students=$obj->getResult();
$output="";

foreach($students as $student){  
    $output .="
    <tr>
    <td>{$student['id']}</td>
    <td>{$student['name']}</td>
    <td>{$student['age']}</td>
    <td>{$student['city']}</td>
    <td><button class='btn btn-success'>Edit</button></td>
    <td><button data-id='{$student['id']}' id='delete-data' class='btn btn-danger'>Delete</button></td>
    </tr>

    ";
}
echo $output;

?>