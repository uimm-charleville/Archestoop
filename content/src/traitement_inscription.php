<?php

session_start();

// Vérifier que tous les champs ont bien été remplis ET que l'utilisateur a bien écrit deux fois le même mail et le même mot de passe
if(isset($_POST['submit']))
{
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['password2']) AND $_POST['password']==$_POST['password2'])
   {

 // Connexion à la BDD
  try {
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

  // Accéder à la table qui nous intéresse : table 'utilisateur' de la BDD , puis préparer le tableau (fetchall) pour exploiter les données

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));

    if (isset($_POST ['submit'])) {
    // Vérifier si le champ utilisateur 'mail' n'existe pas déjà dans la BDD
      $stmt = $conn->prepare("SELECT * FROM users WHERE mail=?");
      $stmt->execute([$mail]); 
      $user = $stmt->fetch();
      if ($user) {
          // le nom d'utilisateur existe déjà
          $_SESSION['message'] = 'Cet utilisateur existe déjà';
          header("Location: ../pages/inscription.php");
}
      else {
          // Ecriture de la requête sur la BDD : ajouter un nouvel utilisateur
        $insertUser = 'INSERT INTO users(id_role, nom, prenom, mail, password) VALUES (:id_role, :nom, :prenom, :mail, :password)';
        
        // Préparation
        $insertUser = $conn->prepare($insertUser);
        
        // Exécution ! L'utilisateur est maintenant en base de données
        $insertUser->execute([
            'id_role' => 1 ,
            'nom' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            'password' => $password,
        ]);
        $utilisateur["prenom"] = $_POST['prenom'] ;
        $_SESSION['message'] = 'Bienvenue ' . $utilisateur["prenom"].', vous êtes à présent enregistré !';
        header("Location: /archestop/index.php");
        unset($insertUser);
        $conn=null;
      }
      }
      else {
        die("erreur");
      }
    }
   }
   // Messages d'erreur si mot de passe différents : l'utilisateur doit entrer deux fois le même mail et deux fois le même mot de passe pour pouvoir s'enregistrer
   elseif ($_POST['password']!=$_POST['password2']) {
    echo "Vous devez entrer un mot de passe identique";
    header("Location: ../pages/inscription.php");
    exit();
   }
  // Vérifier que tous les champs ont bien été remplis
   else
   {
    $_SESSION['message'] = 'Veuillez remplir tous les champs';
          header("Location: ../pages/inscription.php");
          exit();
   }

?> 
