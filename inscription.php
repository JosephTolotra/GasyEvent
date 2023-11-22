<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ANDRIAMANANTENA Tolojanahary">
    <title>Gasy Event | Inscription</title>
   <!-- font icons -->
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="assets/css/tolojanahary.css">
</head>
<body>

   <!-- Page Header -->
   <header class="header header-mini"> 
      <div class="header-title">Inscription</div> 
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="#connexion">Connexion</a></li>
            <li class="breadcrumb-item"><a href="#inscription">Inscription</a></li>
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
            <section id="connexion"></section>
      <form action="authentification.php" method="POST">
        
         <div class="form-group"></div>
         <h3>Connectez vous pour les réservations</h3>
     <label> Email : </label>
     <input type="text" name = "emaillog" class="form-control" id="exampleFormControlInput1" placeholder="Email address">
     <br>
     <label> Mot de passe : </label>
     <input type="password" name = "passlog" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre mot de passe ">
 <br>

     <input type="submit" class="btn btn-success" name="submit1" value="Connecter">
 <br>
 </form>
      </section>

 <br><br>
 <section id="inscription">
     <form action="insertioninscription.php" method="POST">
     <h2>Inscription</h2>
     <label> Nom : </label>
     <input type="text" name = "Inom" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
 <br>
     <label> Prénom : </label>
     <input type="text" name = "Iprenom" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">
 <br>
     <label> Date de naissance : </label>
     <input type="date"  name = "Idatenaiss" class="form-control" id="exampleFormControlInput1" placeholder="01/01/2000">
 <br>
     <label> Téléphone : </label>
     <input type="number" name = "Itelephone" class="form-control" id="exampleFormControlInput1">
 <br>
     <label> Adresse email : </label>
     <input type="text"  name = "Iemail" class="form-control" id="exampleFormControlInput1" placeholder="Email address">
 <br>

     <label> Mot de passe : </label>
     <input type="password" name = "Imotdepasse"  class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre mot e passe">
 <br>
     
     <label> Confirmer le mot de passe : </label>
     <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirmez votre mot de passe">
 <br>
    <input type="submit" class="btn btn-info" name="submit2" value="S'inscrire">
 </form>
</section>
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
