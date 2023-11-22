<?php 
session_start();

    include "connexionbd.php";
    if(isset($_POST['submit1'])){
        $email = $_POST['emaillog'];
        $pass = $_POST['passlog'];

        $sql = "SELECT * FROM login WHERE email = '$email' " ;
        $result = $conn->prepare($sql);
        $result->execute();

        if($result->rowCount() > 0){
            $data = $result->fetchAll();
            if( $pass == $data[0]['password']){
                echo "connexion effectuer";
                $_SESSION['email'] = $email;
               header('location: admin.php');
            }
        }
        else{
            header('location: inscription.php');
        }
    }
?>