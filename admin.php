<?php
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
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" ><title> formulaire </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="kiki.css">
	<title> site culturel de vente de livres </title>
</head>
<body translate="no" >
	
<main>

    
<header class="p-3 text-bg-dark">
<div class="container">
	<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
	  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
		
	  </a>

	  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
		<li><a href="admin.php" class="nav-link px-2 text-secondary">Home</a></li>
		<div class="dropdown text-end">
		<a href="new.php" class="nav-link px-2 text-white"  data-bs-toggle="dropdown" aria-expanded="false">Nouveau</a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="new.php">Arrivée</a></li>
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

<section id="tutorials">
    <div class="row" >
      <div class="col-5">
         <a href="">
             <header class="tut-title"> </header>
             <footer class="tut-footer"></footer>
		 </a>
      </div>
	  <div class="col-5">
         <a href="">
             <header class="tut-title"> </header>
             <footer class="tut-footer"></footer>
		 </a>
      </div>
	  <div class="col-5">
         <a href="">
             <header class="tut-title"> </header>
             <footer class="tut-footer"></footer>
		 </a>
      </div>
	  <div class="col-5">
         <a href="">
             <header class="tut-title"> </header>
             <footer class="tut-footer"></footer>
		 </a>
      </div>
      
      
    </div>

</section>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

