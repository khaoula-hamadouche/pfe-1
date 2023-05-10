<?php


 function getAdmins($email,$password){
  if(require("connexion.php"))
  {
    $req = $access->prepare("SELECT *  FROM admin WHERE email=? AND mdp =?");
    
    $req->execute(array($email,$password));
    if($req->rowCount() == 1){
      $data=$req->fetch();
      return $data;
    }else{
      return false;
    }

    $req->closeCursor(); 
  }
 }


 function ajouter($ref,$naturecour,$confidentiel,$datecourr,$envoyerpar,$distination,$sousdistination,$datearriv,$datetraite,$remarque,$objet,$naturedoc,$fichier)
  {   if(require("connexion.php")){
      $req = $access->prepare("INSERT INTO courrierarrive(ref, naturecour, confidentiel, datecourr, envoyerpar, distination, sousdistination, datearriv, datetraite, remarque, objet, naturedoc, fichier) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

      $req->execute(array($ref,$naturecour,$confidentiel,$datecourr,$envoyerpar,$distination,$sousdistination,$datearriv,$datetraite,$remarque,$objet,$naturedoc,$fichier));

      $req->closeCursor();
    
  }

  }
 
  function ajouterdepart($ref,$naturecour,$confidentiel,$depart,$datedepart,$distination,$datetraite,$remarque,$objet,$naturedoc,$fichier)
  {   if(require("connexion.php")){
      $req = $access->prepare("INSERT INTO courrierdepart( ref, naturecour, confidentiel, depart, datedepart, distination, datetraite, remarque, objet, naturedoc, fichier) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
      

      $req->execute(array($ref,$naturecour,$confidentiel,$depart,$datedepart,$distination,$datetraite,$remarque,$objet,$naturedoc,$fichier));

      $req->closeCursor();
    
  }

  }
 
  function afficher(){
    if(require("connexion.php")){
        $req=$access->prepare("SELECT * FROM admin ORDER BY id DESC" );
        $req->execute();
        $data = $req->fetchall(PDO :: FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
 }


?>