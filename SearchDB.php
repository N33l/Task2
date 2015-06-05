<?php

require_once 'DBOperations.php';
$conn=new DBOperations();
$conn->getConnection();

//var_dump($_POST);
$key=$_POST['sitename'];
echo "Coupons related to ".$key ." are....";
echo '<br>';
$conn->searchCouponsDB($key);

?>
