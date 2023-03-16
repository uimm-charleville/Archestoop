<?php

session_start();

// Vérifier que tous les champs ont bien été remplis
if(isset($_POST['submit']))
{

   if(!empty($_POST['email']) AND !empty($_POST['password']))
   {
    $mail = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    try
    {
      $conn = new PDO(
        'mysql:host=localhost;dbname=archestop;charset=utf8',
        'root',
        ''
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

  // Accéder aux données serveur
    $stmt = $conn->prepare('SELECT * FROM users WHERE mail = ?');
    
    $stmt->execute([$mail]);
    $utilisateur = $stmt->fetch();
    $id_user = $utilisateur['id'];
    $id_role = $utilisateur['id_role'];
    $prenom = $utilisateur['prenom'];
    $nom = $utilisateur['nom'];

    // Vérifier que les champs utilisateur et les données serveur correspondent
    if (password_verify($password, $utilisateur['password']))
    {
      $connexion = $conn->prepare('SELECT * FROM users WHERE id = ?');
      $connexion->execute([$id_user]);
      $role = $connexion->fetchAll();

      //  Message de connexion réussie et Vérification du rôle de l'utilisateur connecté

      if ($id_role == 2) {
      $_SESSION['message'] = 'Bonjour Administrateur, vous êtes connecté avec le compte administrateur ' . $utilisateur['mail'] . '<br>' . 'Gestion Admin : ' . '<br>' .'<a href="/archestop/content/pages/gestion_produits.php"> Gérer les produits </a>' . '<br>' . '<a href="/archestop/content/pages/gestion_users.php"> Gérer les utilisateurs </a>';
      $_SESSION['mail'] = $_POST['email'];
      $_SESSION['password'] = $_POST['password'];
      $_SESSION['prenom'] = $utilisateur['prenom'];
      $_SESSION['nom'] = $utilisateur['nom'];
      $_SESSION['id_user'] = $utilisateur['id'];
      $_SESSION['id_role'] = $id_role;
      header("Location: ../../index.php");
      }

      elseif ($id_role == 1) 
      {
      $_SESSION['message'] = 'Bonjour '.$utilisateur["prenom"].', vous êtes connecté avec le compte ' . $utilisateur['mail'];
      $_SESSION['gestion_admin'] = null;
      $_SESSION['mail'] = $_POST['email'];
      $_SESSION['password'] = $_POST['password'];
      $_SESSION['prenom'] = $utilisateur['prenom_user'];
      $_SESSION['nom'] = $utilisateur['nom_user'];
      $_SESSION['id_user'] = $utilisateur['id_user'];
      $_SESSION['id_role'] = $id_role;
      header("Location: ../../index.php");
      }
    }
          
        
        // Messages d'erreur
        elseif ($utilisateur['mail'] == $mail && $utilisateur['password'] != $password) {
          $_SESSION['message'] = 'Mot de passe incorrect';
          header("Location: ../pages/connexion.php");
          exit();
        }
        else { 
          $_SESSION['message'] = "Le compte n'existe pas avec cet email, veuillez vérifier votre email ou vous inscrire";
          header("Location: ../pages/connexion.php");
          exit();
        }
      }
      else {
        die("erreur");
      }
    }
  //  Vérifier que tous les champs ont bien été remplis
   else
   {
    $_SESSION['message'] = 'Veuillez remplir tous les champs';
          header("Location: ../pages/connexion.php");
          exit();
   }
?>
