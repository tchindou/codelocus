<?php

$dbhost="https://lucent-speculoos-a9c492.netlify.app/";
$dbuser="root";
$dbpwd="";
$dbname="wrc";

$con= mysqli_connect($dbhost, $dbuser, $dbpwd,$dbname);

if(!$con){
       echo "Database connection error".mysqli_connect_error();
}
else{
       try {
              $con = new PDO('mysql:host=localhost; dbname=wrc', 'root', '');
              $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
              } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
       }
}

?>
