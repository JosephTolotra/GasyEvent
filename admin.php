<?php
session_start();
include "connexionbd.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ANDRIAMANANTENA Tolojanahary">
    <title>Gasy Event | Administration</title>
   <!-- font icons -->
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="assets/css/tolojanahary.css">
</head>
<body>

   <!-- Page Header -->
   <header class="header header-mini"> 
      <div class="header-title">Administration</div> 
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="#ajout">Ajout d'un nouvel évenement</a></li>
            <li class="breadcrumb-item"><a href="#message">Messages</a></li>
            <li class="breadcrumb-item"><a href="#reservation">Consulter les réservations</a></li>
         </ol>
      </nav>
   </header> <!-- End Of Page Header -->

   <!-- main content -->
   <div class="container">
      <!-- devider -->
      <div class="py-5"></div>
      <!---->

      
      <div class="row mt-5">
         <div class="col-md-6">
            <section id="ajout"></section>
      <form action="insertionEvent.php" method="POST">
        
         <div class="form-group"></div>
         <h3>Ajouter un nouvel évenement</h3>
     <label> Titre : </label>
     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre">
     <br>
     <label> Couverture : </label>
     <input type="file" class="form-control" id="exampleFormControlInput1">
 <br>
 <label> Date de l'évenement : </label><br>
        <input type="date" class="form-control" id="exampleFormControlInput1"><br>
        <label> Déscription: </label><br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Veillez entrer la description"></textarea><br>
     <input type="submit" class="btn btn-primary btn-lg" value="Ajouter">
 <br>
 </form>
      </section>

 <br>

 
      <!-- devider -->
      <div class="py-5"></div> 

      <!-- typography -->
      <h3 class="components-section-title" id="message">Message</h3>
      <hr>
      <table class="table table-borderless v-align-center">
         <tbody>
            <?php
            
               if (isset($_SESSION['email'])){
    
               //echo "admintest";

               $sql = "SELECT * FROM contact";

               $result = $conn->query($sql)->fetchAll();
   
                  foreach ($result as $row){
                     //echo $row['id'];
               ?>
                  
                  <tr>
                  <td>
                     <p class="font-weight-bold text-info"> <?php echo $row['email'].':'; ?></p>
                  </td>
                  <td>
                     <p class="text-muted"><?php echo $row['message']; ?></p>
                  </td>
            </tr>

            <?php
                  }
               }
            ?>
         
          
         </tbody>
      </table>
   </div>
  </div>
 











      <!-- devider -->
                
        
   <!-- Page Footer -->
   <footer class="container mt-5 py-4 border-top border-light">
       <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, Gasy Event Created By <strong>ANDRIAMANANTENA Tolojanahary</strong>  All rights reserved </p>     
   </footer>
   <!-- End of Page Footer -->  
   
   <!-- core  -->
   <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
   <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

</body>
</html>

