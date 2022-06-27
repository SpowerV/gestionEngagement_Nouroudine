<?php
session_start();
if (isset($_POST['nom_utilisateur']) && isset($_POST['mdp'])) {
   // connexion à la base de données
   include ("../php/database.php");
   //
   //
   try {
      $con = new PDO($dsn, $mysql_user, $mysql_password);
   } catch (PDOException $e) {
      exit("connection impossible");
   }

   // 
   // 
   $username = htmlspecialchars($_POST['nom_utilisateur']);
   $password = htmlspecialchars($_POST['mdp']);


   if ($username != "" && $password != "") {
      $usn = "";
      $req = "SELECT * FROM utilisateur WHERE nom_utilisateur = '$username' AND mdp = '$password'";
      //
      foreach ($con->query($req) as $data) {
         $usn = $data["nom_utilisateur"];
         $_SESSION['nom_utilisateur'] = $username;
         header('Location: ../principal.php');
      }
      if ($usn != 0) // nom d'utilisateur et mot de passe correctes
      {
         header('Location: ../login.php?erreur=1'); // utilisateur ou mot de passe incorrect

      }
   } else {
      header('Location: ../login.php?erreur=2'); // utilisateur ou mot de passe vide

   }
} else {
   header('Location: ../login.php');
}
