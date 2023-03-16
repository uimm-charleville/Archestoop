<?php
session_start();
?>

<link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
<body class="border-0">


<?php require_once("../include/navbar.php");


if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
}
?>

<div class="contain-forms">
  <div class="accroche">
    <h1 class="">Inscription</h1>
  </div>
  <div class="form-box">
    <form class="" method="POST" action="../../content/src/traitement_inscription.php">
      <div class="mb-3">
        <input type="text" name = "nom" class="form-control input" id="nom" placeholder="Nom"/>
      </div>
      <div class="mb-3">
        <input type="text" name = "prenom" class="form-control input" id="prenom" placeholder="Prénom"/>
      </div>
      <div class="mb-3">
        <input type="email" name = "mail" class="form-control input" placeholder="Adresse email"/>
      </div>
      <div class="mb-3">
        <input type="password" name = "password" class="form-control input" placeholder="Mot de passe"/>
      </div>
      <div class="mb-3">
        <input type="password" name = "password2" class="form-control input" placeholder="Confirmez votre mot de passe"/>
      </div>
      <button type="submit" name="submit" class="btn-connexion">S'inscrire</button>
      <div class="mb-3">
      <a href="./connexion.php">Vous avez déjà un compte ?</a>
      </div>
    </form>
  </div>
</div>

<?php require_once("../include/footer.php");?>

</body>
