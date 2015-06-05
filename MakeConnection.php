<?php

class MakeConnection
{
     public function getConnection(){
       
       
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   echo '<br>';
   mysql_close($conn);
    }
}

?>
