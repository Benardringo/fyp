<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mifis";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} 

/*$con  = mysqli_connect("localhost","root","","salesdb");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }
*/
else{
         $sql =" select expense_name as Product ,count(expense_name) as TotalSales from expense group by expense_name;";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Product']  ;
            $sales[] = $row['TotalSales'];
        }
 
 
 }
?>