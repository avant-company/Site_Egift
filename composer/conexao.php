<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "bdegift";

$connect = mysqli_connect($host,$user,$pass,$bd);

if(mysqli_connect_error()){
    echo "erro de conexão".mysqli_connect_error();
}else{
    
}

?>