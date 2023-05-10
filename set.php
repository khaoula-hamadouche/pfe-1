<?php
require("config/commande.php");
$prf=afficher();

?> 
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="p/css/all.min.css" />
    <link rel="stylesheet" href="p/css/framework.css" />
    <link rel="stylesheet" href="p/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  
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
		<a href="#" class="nav-link px-2 text-white"  data-bs-toggle="dropdown" aria-expanded="false">Nouveau</a>
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
		<a href="#" class="nav-link px-2 text-white"  data-bs-toggle="dropdown" aria-expanded="false">
		  <img src="utilisateur.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
		</a>
		<ul class="dropdown-menu text-small">
		  <li><a class="dropdown-item" href="set.php" class="nav-link px-2 text-secondary">Profile</a></li>
		  <li><hr class="dropdown-divider"></li>
		  <li><a class="dropdown-item" href="index.php">Sign out</a></li>
		</ul>
	  </div>
	</div>
  </div>
</header>

</main>
<br><br>
 <?php foreach($prf as $admin): ?>
            
            <center>

            <img src="<?= $admin->image ?>" width="150" height="150" class="rounded-circle"><br>
            <b>Bienvenue <?= $admin->prenom ?> </b>
           </center>

          
           <div class="page d-flex">
    
        
      <div class="content w-full">
        <h1 class="p-relative">Profile</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
            <img src="<?= $admin->image ?>"  width="150" height="150">
              <h3 class="m-0"><?= $admin->nom ?> <br> <?= $admin->prenom ?></h3>
            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey fs-15 m-0 w-full">Information General  </h4>
                <div class="fs-14">
                  <span class="c-grey">Nom</span>
                  <span><?= $admin->nom ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Prenom</span>
                  <span><?= $admin->prenom ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Sexe:</span>
                  <span><?= $admin->sexe ?></span>
                </div>
                
                <div class="fs-14">
                  
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0"> Information Personal</h4>
                <div class="fs-14">
                  <span class="c-grey">Email:</span>
                  <span><?= $admin->email ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Num telephone:</span>
                  <span><?= $admin->num ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Date de naissance</span>
                  <span><?= $admin->date ?></span>
                </div>
                <div class="fs-14">
                 
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0">Information Professionel</h4>
                <div class="fs-14">
                  <span class="c-grey">Departement</span>
                  <span>DSI</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Direction</span>
                  <span>ERP</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Years Of Experience:</span>
                  <span>15+</span>
                </div>
                <div class="fs-14">
                 
                </div>
              </div>
              <!-- End Information Row -->
              
            </div>
          </div>
          <?php endforeach; ?>


        



    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
