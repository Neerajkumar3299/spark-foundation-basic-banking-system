<?php

   //Connect to database
   $server="localhost";
   $username="root";
   $password="";
   $database="bankingsystem";
   
   //Create Connection
   $conn=mysqli_connect($server,$username,$password,$database);
   if(!$conn){
	   echo "Falied to connect<br>";
   }

   
   

?>