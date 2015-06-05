<?php

require_once 'DBOperations.php';
$conn=new DBOperations();
$conn->getConnection();

//var_dump($_POST);
$fname=$_POST['fname'];
//echo "you entered firstname  ".$fname;
//echo '<br>';
$lname=$_POST['lname'];
//echo "you entered lastname ".$lname;
//echo '<br>';
$conn->insertIntoDB($fname, $lname);
echo "Database entries after insertion are....";
$conn->showData();



?>
