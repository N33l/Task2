<?php

class DBOperations
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
   //echo 'Connected successfully';
   echo '<br>';
   return $conn;
   mysql_close($conn);
    }
    
    public function showData()
    {
       $connObj=new DBOperations();
        $connection=$connObj->getConnection();
        mysql_select_db("CouponDatabase");
        $sql = "SELECT * FROM UserInfo";
        $result = mysql_query($sql);


        while($row = mysql_fetch_array($result))
        {  
            echo '<br>';
            echo $row['FirstName'];
            echo "\n";
            echo $row['LastName'];

        }
    }
    
    
        public function insertIntoDB($fname,$lname)
        {
        
            $connObj=new DBOperations();
         $connection=$connObj->getConnection();
            mysql_select_db("CouponDatabase");
            $sql = $sql = "INSERT INTO UserInfo (FirstName, LastName)
            VALUES ('$fname', '$lname')";
            $result = mysql_query($sql);
        
        }
        
        public function searchCouponsDB($key)
        {
            
            $connObj=new DBOperations();
         $connection=$connObj->getConnection();
         
         mysql_select_db('CouponDatabase');
         $query="SELECT * FROM coupons WHERE site LIKE '%$key%' union select * from coupons WHERE coupon LIKE '%$key%'";
         $result=  mysql_query($query);
         
         //$values = mysql_fetch_assoc($results);
        //$num_rows = $values['total'];
         $num=  mysql_num_rows($result) ;
         
         
         if(! $num)
         {
             echo "<h2> Oooops No coupons founds </h2>";
         }
        else {
     
            echo "<h2> $num coupons founds </h2>";
         while($row = mysql_fetch_array($result))
        {  
             
            echo '<br>';
            echo '<h3>'.$row['site'].'</h3>';
            echo "\n";
            echo '<h5>'.$row['coupon'].'</h5>';
            

        }
        }
         
            
        }
}

//$obj=new DBOperations();

//$obj->insertIntoDB("rohit","kumar");

//$obj->searchCouponsDB();


?>