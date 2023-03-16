<?php
session_start();
?>

<link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
<body class="">


<?php require_once("../include/navbar.php");


if (isset($_SESSION['message'])) {
        echo $_SESSION['message'] . '<br>';
    }  

?>
<div class="contain-forms">
  <div class="accroche">
    <h1 class="">Connexion</h1>
  </div>
<div class="form-box">
    <form class="" action="../src/traitement_connexion.php" method="POST">
      <div class="mb-3">
        <input type="email" name="email" class="form-control input" placeholder="Adresse email"/>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control input" placeholder="Mot de passe"/>
      </div>
      <button type="submit" name="submit" class="btn-connexion">Se Connecter</button>
      <div class="mb-3">
      <a href="./inscription.php">Pas encore inscrit ?</a>
      </div>
    </form>
</div>
</div>

<?php require_once("../include/footer.php");?>
</body>
