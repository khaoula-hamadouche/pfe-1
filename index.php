<?php
include "config/commande.php";
 session_start();
 if(!isset($_SESSION['azerty']))
{
    if(!empty($_SESSION['azerty']))
{
    header("Location: admin.php/");
}
}





?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Gestion du courrier Algerie</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    
    <link href="style.css" rel="stylesheet">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      
      .bd-placeholder-img {
        background-image: url("1.png");
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" id="hero">


    
<main class="form-signin w-100 m-auto" id="p">
  <form method="post">
    <img class="mb-4" src="logo.png" alt="" width="200" height="100">
    <h1 class="h3 mb-3 fw-normal">Courrier</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name ="email" >
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <input class="w-100 btn btn-lg btn-dark" type="submit" name="envoyer"value="Sign in">
  </form>
</main>

  
  </body>
</html>
<?php
 if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['password']) ){
        $email= htmlspecialchars( $_POST['email']); 
        $password=htmlspecialchars( $_POST['password']);
        $admin= getAdmins($email,$password);
         if($admin){
          $_SESSION['azerty'] =$admin;
          header("Location: admin.php");



         }else{
           echo"email ou mot de passe incorrect";
         }
    }
 }
?>