<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Documentation</title>
        <link rel="stylesheet" href="../../assets/css/reset.css">
        <link rel="stylesheet" href="../../assets/css/docu.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>
    <body>
        <?php require_once('../include/navbar.php') ?>
        
                <style>
            :root {
            --primary-color: #f2f3ea;
            --secondary-color: #2C5C59;
            --third-color: #98851E;
}
            .documentation {
                background-color: var(--primary-color);
            }
        </style>

        <div class="container my-3">
            <div id="carouselDocu" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../assets/img/exemple_produit.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../assets/img/exemple_produit2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../assets/img/exemple_produit3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDocu" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDocu" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-responsive align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Granulométrie</th>
                            <th scope="col">Matière Organique</th>
                            <th scope="col">Calcimétrie</th>
                            <th scope="col">Carbone14</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">Gravier fin<br><br>50%<br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas, sunt.</th>
                            <td>17%<br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, odit?</td>
                            <td>33%<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, doloremque.</td>
                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, accusamus.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php require_once('../include/footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    </body>
</html>
