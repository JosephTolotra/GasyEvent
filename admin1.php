<?php
session_start();
include "connexionbd.php";
if (isset($_SESSION['email'])){
    
    echo "admintest";

    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql)->fetchAll();
    
   foreach ($result as $row){
    echo $row['id'];
   }
}



?>