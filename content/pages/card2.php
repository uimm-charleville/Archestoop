<!doctype html>


<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/archestop/assets/css/card.css">
  <link rel="stylesheet" href="/archestop/assets/css/footer.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<?php require_once ('../include/navbar.php')?>

      <div class=" w-100 mt-1 border infoUser mt-5" style="margin-top: 70px!important;">
          <ul class="mb-0 ps-0 fs-6 li-point-boutique">
              <li>Points : 100k</li><br>
              <li><?php echo 'nom'?></li>
          </ul>
          <img class="avatar-img" src="/archestop/assets/img/casque_romain.png ">
      </div>


    <div class="btnchang">
        <button onclick="change(0)" class="change btn-change-1">Randonnées</button>
        <button onclick="change(1)" class="change btn-change-1">Musées</button>
    </div>

    <div class="wrapper">


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank"><div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                      <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
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
                </a>
                <div class="contain">
                <h4 class="font-title"><b>Randonnées sur sentier</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank"><div id="carouselExampleIndicators2" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div></a>
                <div class="contain">
                <h4 class="font-title"><b>Marche dans la fôret</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>




        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators3" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Randonnées accompagné</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>




        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank"><div id="carouselExampleIndicators4" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </a>
                <div class="contain">
                <h4 class="font-title"><b>Rando'écologie</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators5" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Randonnées à la plaine</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators6" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Randonnées sur un site</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators7" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators7" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Randonnées dans les fleurs</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators8" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/rando.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators8" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Randonnées ...</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper">


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank"><div id="carouselExampleIndicators9" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators9" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators9" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators9" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators9" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators9" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </a>
                <div class="contain">
                <h4 class="font-title"><b>Musée d'Orsay</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank"><div id="carouselExampleIndicators10" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators10" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators10" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators10" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators10" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators10" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div></a>
                <div class="contain">
                <h4 class="font-title"><b>Musée du Louvre </b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>




        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators3" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators11" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Musée du Louvre </b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>




        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank"><div id="carouselExampleIndicators12" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators12" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </a>
                <div class="contain">
                <h4 class="font-title"><b>Musée de l'Armée </b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators13" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators13" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators13" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators13" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators13" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators13" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Musée de Cluny </b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators14" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators14" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators14" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators14" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators14" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators14" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Musée nationnal d'Art moderne</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators15" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators15" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators15" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators15" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators15" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators15" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Musée de Montmartre</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="space-card">
                <a href="pageproduct.php" target="_blank">                    
                    <div id="carouselExampleIndicators16" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators16" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators16" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators16" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/archestop/assets/img/musee.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators16" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators16" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>                
                    </a>
                <div class="contain">
                <h4 class="font-title"><b>Musée des beaux Arts</b></h4> 
                <p class="text-top-product">5,99 € / 200 Points </p> 
            </div>
                <div class="grpicon">
                    <a href="#" type="button"><i class="bi bi-cash icon-prod"></i></a>
                    <a href="#" type="button"><i class="bi bi-coin icon-prod"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="card.php">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      </div>


      <?php 

        require_once('../include/footer.php');

      ?>
  <script>
    let container = document.getElementsByClassName("wrapper");
    let span = document.getElementsByClassName("change");


    container[1].style.display = "none";



    p = 0;

    span[0].style.background = "#98851E";
    span[1].style.background = "#2C5C59";

    span[0].style.color = "#f2f3eA";
    span[1].style.color = "#f2f3eA";

    function change(y) {

        container[1].style.display = "none";

        span[0].classList.remove("actived");
  
        span[0].style.background = "none";
        span[1].style.background = "none";


       p = 0;


        if ( y == 0 ) {


            container[y].style.display = "grid";
            container[1].style.display = "none";

            span[y].style.background = "#98851E";
            span[1].style.background = "#2C5C59";

            span[y].style.color = "#f2f3eA";
            span[1].style.color = "#f2f3eA";
            


            p = 0;
        }

    else if ( y == 1 ) {

        container[0].style.display= "none";
        container[y].style.display= "grid";
           
        span[y].style.background = "#98851E";
        span[0].style.background = "#2C5C59";

        span[y].style.color = "#f2f3eA";
        span[0].style.color = "#f2f3eA";
        
        }

        } 
        
        </script>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>