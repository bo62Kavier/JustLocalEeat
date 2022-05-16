<?php 
    require('config/database.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Just Local Eeat, Manger sain en local</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<!-- ========= ENTETE =========== -->
    <div class="container-fluid entete">
        <div class="row log1">
            <div class="col-md-3 logo">
                <img src="images/logo.png" alt="">
            </div>
            <div class="col-md-6 mt-5 recherche">
                <nav class="navbar navbar-light">
                    <div class="container-fluid search">
                        <form class="d-flex mt-4">
                            <input class="form-control me-2 " type="search" placeholder="Recherche" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col-md-3 mt-5 login">
                <nav class="nav nav-pills flex-column flex-sm-row mt-4" >
                    <a href="deconnexion.php" class="flex-sm-fill text-sm-center nav-link" >
                        <i class="bi bi-person"></i> DECONNEXION 
                    </a>
                </nav>
            </div>
        </div>

        <div class="row log2">
            <div class="col-md-3 logo">
                <img src="images/logo.png" alt="">
            </div>
            <div class="col-md-9 mt-3 recherche">
                <nav class="navbar navbar-light">
                    <div class="container-fluid search">
                        <form class="d-flex mt-4">
                            <input class="form-control me-2 " type="search" placeholder="Recherche" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </nav>
                <nav class="nav nav-pills flex-column flex-sm-row mt-4" >
                    <a href="deconnexion.php" class="flex-sm-fill text-sm-center nav-link" >
                        <i class="bi bi-person"></i> DECONNEXION 
                    </a>    
                </nav>

            </div>
         
        </div>
    </div>

<!-- ========== END ENTETE ========== -->
<!-- ========== MENU ========= -->
    <nav class="nav sticky-top nav-pills flex-column flex-sm-row mt-4">
        <a class="flex-sm-fill text-sm-center nav-link" href="index.php">
            <i class="bi bi-house"></i> Accueil
        </a>
        <a class="flex-sm-fill text-sm-center nav-link" href="produits.php" >
            <i class="bi bi-bag"></i> Nos Produits
        </a>
        
        <li class="flex-sm-fill text-sm-center nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="categorie.php" role="button" aria-expanded="false">
                <i class="bi bi-boxes"></i> Catégories
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="categorie.php#categorie1">Céréales</a></li>
                <li><a class="dropdown-item" href="categorie.php#categorie2">Confiture</a></li>
                <li><a class="dropdown-item" href="categorie.php#categorie3">Poudre</a></li>
                <li><a class="dropdown-item" href="categorie.php#categorie4">Conserve</a></li>
                <li><a class="dropdown-item" href="categorie.php#categorie5">Légumes</a></li>
                <li><a class="dropdown-item" href="categorie.php#categorie6">Autres </a></li>
            </ul>
        </li>
        <li class="flex-sm-fill text-sm-center nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="zoom.php" >
                <i class="bi bi-zoom-in"></i> Zoom sur...
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="zoom.php#zoom1">Bonne alimentation</a></li>
                <li><a class="dropdown-item" href="zoom.php#zoom2">Bien manger, en pratique</a></li>
                <li><a class="dropdown-item" href="zoom.php#zoom3">Conseils</a></li>
                <li><a class="dropdown-item" href="zoom.php#zoom4">Manger, une affaire...</a></li>
                <li><a class="dropdown-item" href="zoom.php#zoom5">Légumes</a></li>
                <li><a class="dropdown-item" href="zoom.php#zoom6">Recettes</a></li>
            </ul>
        </li>
                <a class="flex-sm-fill text-sm-center nav-link" href="inscription.php" >
            <i class="bi bi-lock"></i> Inscription
        </a>
    </nav>
        
<!-- ========= END MENU ========= -->

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Mon compte</h1>
            <p class="col-lg-10 fs-4">Content de vour revoir 
                <strong> <?= $_SESSION['user']['pseudo'] ?></strong></p>
        </div>
        
    </div>
</div>



<?php require('includes/footer.php'); ?>