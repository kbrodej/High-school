<?php

$server='localhost';
$user='qodv01_admin';
$pass='n0rmdKRO';



try {
    $db= new PDO('mysql:host=localhost;dbname=qodv01_cv;charset=utf8', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


/*
$connection = mysqli_connect($server,$user,$pass)
        or die("Ne morem najti strežnika");


//mysqli_connect($server,$user,$pass)//mysql connect
    
//izbira baze

$db_select = mysqli_select_db($connection, $db_name)
        or die("Ne morem najti baze");

//Za šumnike

mysqli_set_charset($connection,'utf8');

*/
?>