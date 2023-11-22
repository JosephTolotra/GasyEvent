<?php
    include "connexionbd.php";

    if ( (isset($_POST["name"])) && (isset($_POST["email"])) && (isset($_POST["subject"])) && (isset($_POST["message"]))) {
       
        $name = $_POST["name"]; 
        $email = $_POST["email"]; 
        $subject= $_POST["subject"]; 
        $message = $_POST["message"]; 

        $req = " INSERT INTO contact (nom,email,sujet,message) VALUES (:name,:email, :subject, :message)";

        $query = $conn->prepare($req);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':subject', $subject, PDO::PARAM_STR);
        $query->bindValue(':message', $message, PDO::PARAM_STR);

        $query->execute();

       
        //verification 
        if($query){
           // echo 'Données insérée';
           header('location: index.php');
        }
        else{
            echo "échec de l'operation d'insertion";
        }
    }


?>