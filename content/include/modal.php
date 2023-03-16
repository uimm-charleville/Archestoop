<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="/archestop/assets/js/modal.js" defer></script>
    <title>Document</title>
</head>

<style>

dialog{
    background-color:#f2f3eA;
    border-radius:10px;
}

.btnmodal-closepic{
    display:flex;
    justify-content:space-around;
}

.icon-cam-take{
    font-size:200%;
    background-color:#2c5c59;
    border-radius: 180px;
    width:100%;
    display:block;
    padding-left:10px;
    padding-right:10px;
    padding-bottom:4px;
}

.icon-cam-take:hover{
    color:#98851E;
}

.button-close-modal{
    border:0;  
    background-color:#2c5c59;
    border-radius: 180px;
    color:#f2f3eA;
}

.button-close-modal:hover{
    color:#98851E;
}
.img-perso-rome{
    pointer-events: none;
    opacity:15% !important;
    width:60%;
    right:70% !important;
    top:65% !important;
}

a{
    color:#f2f3eA;
}

.link-connect-content{
    color:#98851E;
    padding-bottom:5%;
    margin-right:10%;
    margin-left:10%;
    text-decoration:none;
}

.text-modal-princ{
    margin-top:5%;
    margin-bottom:5%;
}

.text-mid-info{
  margin-right:10%;
  margin-left:10%;
  text-align : center;
}

.colise-img{
  margin-top:3%;
}
</style>

<body>
  <button id="open-dialog">Ouvrir la modal</button>
  <dialog id="modal" class="col mw-100 justify-items-center overflow-hidden">
    <img src="/archestop/assets/img/illustration_rome.png" class="img-fluid position-absolute end-50 top-50 z-0 opacity-25 img-perso-rome">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/archestop/assets/img/exemple_produit.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/archestop/assets/img/exemple_produit2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/archestop/assets/img/exemple_produit3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="d-inline-flex flex-wrap">
      <img src="/archestop/assets/img/rome.png" height="50px" class="w-25 colise-img">
      <h4 class="w-75 text-center fs-4 text-modal-princ">Un super site archéo</h4>


      <p class="w-100 text-mid-info">
        <?php echo substr('Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        Saepe fugiat quas animi',0, 150) . '..'; ?> 
        <?php if (isset($_SESSION['message'])) {?>
          <a href="#"> voir plus</a>
        <?php } else { ?>
        <br>
        <div class="d-flex">
          
          <a href="#" class="text-center link-connect-content">Connectez vous pour accéder au reste du contenu</a>
        </div>
        <?php } ?>
      </p>
    </div>
    <div class="btnmodal-closepic">
        <button id="close-dialog" class="me-0 d-block button-close-modal">Fermer</button>
        <a href="#" data-points="50" class="elementPoint"><i class="bi bi-camera icon-cam-take"></i></a>
    </div>
  </dialog>


    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


<script>
const openModal = document.getElementById('open-dialog');
const closeModal = document.getElementById('close-dialog');
const modal = document.getElementById('modal');

openModal.addEventListener('click', () => {
modal.showModal();
});

closeModal.addEventListener('click', () => {
modal.close();
});

</script>

</body>
</html>
