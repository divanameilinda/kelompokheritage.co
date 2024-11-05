<?php $hostname = "localhost";
$username = "root";
$password ="";
$database_name = "db_heritageco";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "coneksi error";
    die("error");
}

?>
