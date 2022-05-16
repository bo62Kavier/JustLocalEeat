    <style>
        .active{
            background-color: black;
        }
    </style>
    <nav class="nav sticky-top nav-pills flex-column flex-sm-row  mt-4">
        <a class="flex-sm-fill text-sm-center nav-link <?php echo( basename($_SERVER['PHP_SELF']=="index.php")?"active" : "" )?>" href="index.php">
            <i class="bi bi-house"></i> Accueil
        </a>
        <a class="flex-sm-fill text-sm-center nav-link <?php echo( basename($_SERVER['PHP_SELF']=="produits.php")?"active" : "") ?>" href="produits.php" >
            <i class="bi bi-bag"></i> Nos Produits
        </a>
        
        <li class="flex-sm-fill text-sm-center nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo( basename($_SERVER['PHP_SELF']=="categorie.php")?"active" : "") ?>" data-bs-toggle="dropdown" href="categorie.php" role="button" aria-expanded="false">
                <i class="bi bi-boxes"></i> Catégories
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="categorie.php#categorie1")?"active" : "" )?>" href="categorie.php#categorie1">Céréales</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="categorie.php#categorie2")?"active" : "" )?>" href="categorie.php#categorie2">Confiture</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="categorie.php#categorie3")?"active" : "" )?>" href="categorie.php#categorie3">Poudre</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="categorie.php#categorie4")?"active" : "" )?>" href="categorie.php#categorie4">Conserve</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="categorie.php#categorie5")?"active" : "" )?>" href="categorie.php#categorie5">Légumes</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="categorie.php#categorie6")?"active" : "" )?>" href="categorie.php#categorie6">Autres </a></li>
            </ul>
        </li>
        <li class="flex-sm-fill text-sm-center nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo( basename($_SERVER['PHP_SELF']=="zoom.php")?"active" : "" )?>" data-bs-toggle="dropdown" href="zoom.php" >
                <i class="bi bi-zoom-in"></i> Zoom sur...
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="zoom.php#zoom1")?"active" : "" )?>" href="zoom.php#zoom1">Bonne alimentation</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="zoom.php#zoom2")?"active" : "" )?>" href="zoom.php#zoom2">Bien manger, en pratique</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="zoom.php#zoom3")?"active" : "" )?>" href="zoom.php#zoom3">Conseils</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="zoom.php#zoom4")?"active" : "" )?>" href="zoom.php#zoom4">Manger, une affaire...</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="zoom.php#zoom5")?"active" : "" )?>" href="zoom.php#zoom5">Légumes</a></li>
                <li><a class="dropdown-item <?php echo( basename($_SERVER['PHP_SELF']=="zoom.php#zoom6")?"active" : "" )?>" href="zoom.php#zoom6">Recettes</a></li>
            </ul>
        </li>
        <a class="flex-sm-fill text-sm-center nav-link <?php echo( basename($_SERVER['PHP_SELF']=="inscription.php")?"active" : "" )?>" href="inscription.php" >
            <i class="bi bi-lock"></i> Inscription
        </a>
        
    </nav>
        
<!-- ========= END MENU ========= -->