<?php


//connecting to the database
$servername="localhost";
$username="root";
$password="";
$db="job";

//create a connection
$conn=mysqli_connect($servername,$username,$password,$db);


//die if connection was not successful
if(!$conn){

    die("connection was failed".mysqli_connect_error());
}

/*else{
// //echo"Connection was sucessfull";
// ?>
// <script>
//     alert("Connection was sucessfull");
// </script>
// <?php
}*/ 

?>