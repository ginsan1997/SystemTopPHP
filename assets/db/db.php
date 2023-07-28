<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "topsystem";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("Connect error" . $conn->connect_error);
}
'Connect Success';