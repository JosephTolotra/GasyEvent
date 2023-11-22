
<?php
     include "connexionbd.php";

    if ( (isset($_POST["Inom"])) && (isset($_POST["Iprenom"])) && (isset($_POST["Idatenaiss"])) && (isset($_POST["Itelephone"]))  && (isset($_POST["Iemail"]))  && (isset($_POST["Imotdepasse"]))) {
        $Inom = $_POST["Inom"]; 
        $Iprenom = $_POST["Iprenom"]; 
        $Idatenaiss = $_POST["Idatenaiss"]; 
        $Itelephone = $_POST["Itelephone"]; 
        $Iemail = $_POST["Iemail"]; 
        $Imotdepasse = $_POST["Imotdepasse"]; 

        $req1 = " INSERT INTO  inscription (nom,prenom,datenaiss,telephone,email,password) VALUES (:nom,:prenom, :datenaiss, :telephone, :email, :password)";
        $req2 = " INSERT INTO  login (email,password) VALUES (:email, :password)";

        $query1 = $conn->prepare($req1);
        $query1->bindValue(':nom', $Inom, PDO::PARAM_STR);
        $query1->bindValue(':prenom', $Iprenom, PDO::PARAM_STR);
        $query1->bindValue(':datenaiss', $Idatenaiss, PDO::PARAM_STR);
        $query1->bindValue(':telephone', $Itelephone, PDO::PARAM_STR);
        $query1->bindValue(':email', $Iemail, PDO::PARAM_STR);
        //Syntaxe mi-crypté mot de pass
        $query1->bindValue(':password', sha1($Imotdepasse), PDO::PARAM_STR);

        $query2 = $conn->prepare($req2);
        $query2->bindValue(':email', $Iemail, PDO::PARAM_STR);
        $query2->bindValue(':password', sha1($Imotdepasse), PDO::PARAM_STR);

        $query1->execute();
        $query2->execute();

        if ($query1) {
            header('location: index.php');
        }

    }
    ?>