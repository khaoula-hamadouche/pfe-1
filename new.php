<?php
session_start();
require("config/connexion.php");
require("config/commande.php");

?> 
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8"/>
	 <title>Gestion des courriers</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="st.css" rel="stylesheet">
    <link href="khaoula.css" rel="stylesheet">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" ><title> formulaire </title>
</head>
<body translate="no" >
	
<main>

    
<header class="p-3 text-bg-dark">
<div class="container">
	<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
	  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
		
	  </a>

	  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
		<li><a href="admin.php" class="nav-link px-2 text-white">Home</a></li>
		<div class="dropdown text-end">
		<a href="new.php" class="nav-link px-2 text-secondary"  data-bs-toggle="dropdown" aria-expanded="false">Nouveau</a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item text-secondary"href="new.php">Arrivée</a></li>
            <li><a class="dropdown-item" href="new2.php">Depart</a></li>
          </ul>
        </div>
		<li><a href="#" class="nav-link px-2 text-white">Arrivée</a></li>
		<li><a href="#" class="nav-link px-2 text-white">Depart</a></li>
		<li><a href="#" class="nav-link px-2 text-white"> Corbeiller</a></li>
	  </ul>

	  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
		<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
	  </form>

	  <div class="dropdown text-end">
		<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		  <img src="utilisateur.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
		</a>
		<ul class="dropdown-menu text-small">
		  <li><a class="dropdown-item" href="set.php">Profile</a></li>
		  <li><hr class="dropdown-divider"></li>
		  <li><a class="dropdown-item" href="index.php">Sign out</a></li>
		</ul>
	  </div>
	</div>
  </div>
</header>

</main>

      
<h2>
   <div class="square"><br>
     <h1><i class="fa-sharp fa-regular fa-inbox-in"></i>Traitment du courrier Arrive:</h1>
     <form method="post">
        <h4>
		Reference: 
        <input type="text" name="ref"> 
		
      Nature de courrier :
        <select name="naturecour" >
        <option value="urgent">Urgent</option>
        <option value="normal">Normal</option>
        <option value="tres urgent ">Tres urgent </option>
       </select>
	     Confidentiel :
       <select name="confidentiel" >
        <option value="oui">oui</option>
        <option value="non">non</option>
       </select>
	  <br> <br>
		 Date d'envoyer le courrier  :
        <input type="date" name="datecourr" >
  Envoyer par :
        <input type="text" name="envoyerpar"><br><br>
        destinataire:
        <input type="text" name="distination">
         Sous destinataire:
        <input type="text" name="sousdistination">
       
	   <br><br>

       Date d'arrivee :
       <input type="date" name="datearriv">
	   Date limité de traitement :
       <input type="date" name="datetraite">
      
       <br><br>
     
      Remarque:
      <input type="text" name="remarque">
      Objet :
     <input type="text" name="objet">
      <br><br>
      Nature document :
		 <select name="naturedoc">   </h4>
    
        <option value="txt"  >txt</option>
        <option value="pdf">pdf</option>
         <option value="word">word</option>
       </select>
     <input type="file" name="fichier">
     <div class="khaoula">
     <button type="submit" class="mk" name ="valider" >Envoyer</button>
      </div>
     </div>
    
 </div>
 </form>
 </h2>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
<?php
if(isset($_POST['valider'])){
  if( isset($_POST['ref']) AND  isset($_POST['naturecour']) AND isset($_POST['confidentiel']) 
  AND isset($_POST['datecourr']) AND isset($_POST['envoyerpar']) AND isset($_POST['distination']) 
  AND isset($_POST['sousdistination']) AND  isset($_POST['datearriv']) AND isset($_POST['datetraite']) 
   AND isset($_POST['remarque']) AND isset($_POST['objet'])  AND isset($_POST['naturedoc'])  
   AND isset($_POST['fichier'])){
      if(!empty($_POST['ref'])  AND !empty($_POST['naturecour']) AND  !empty($_POST['confidentiel']) 
      AND  !empty($_POST['datecourr']) AND !empty($_POST['envoyerpar']) AND !empty($_POST['distination']) 
      AND  !empty($_POST['sousdistination']) AND !empty($_POST['datearriv']) AND  !empty($_POST['datetraite']) 
      AND  !empty($_POST['remarque']) AND  !empty($_POST['objet']) AND !empty($_POST['naturedoc']) 
       AND  !empty($_POST['fichier'])){
      $ref=htmlspecialchars(strip_tags($_POST['ref']));
      $naturecour=htmlspecialchars(strip_tags($_POST['naturecour']));
      $confidentiel=htmlspecialchars(strip_tags($_POST['confidentiel']));
      $datecourr=htmlspecialchars(strip_tags($_POST['datecourr']));
      $envoyerpar=htmlspecialchars(strip_tags($_POST['envoyerpar']));
      $distination=htmlspecialchars(strip_tags($_POST['distination']));
      $sousdistination=htmlspecialchars(strip_tags($_POST['sousdistination']));
      $datearriv=htmlspecialchars(strip_tags($_POST['datearriv']));
      $datetraite=htmlspecialchars(strip_tags($_POST['datetraite']));
      $remarque=htmlspecialchars(strip_tags($_POST['remarque']));
      $objet=htmlspecialchars(strip_tags($_POST['objet']));
      $naturedoc=htmlspecialchars(strip_tags($_POST['naturedoc']));
      $fichier=htmlspecialchars(strip_tags($_POST['fichier']));
      try{
        ajouter($ref,$naturecour,$confidentiel,$datecourr,$envoyerpar,$distination,$sousdistination,$datearriv,$datetraite,$remarque,$objet,$naturedoc,$fichier);
      }
      catch(Exception $e){
        echo  $e->getMessage();
      }
      
      } 
  }
 }
?>