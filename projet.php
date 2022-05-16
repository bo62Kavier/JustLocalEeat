<?php
    require('includes/header.php');
    require('includes/nav.php');
?> 
<style>
    .person img{
        height:250px;
        width:250px;
        border-radius:250px;
        box-shadow:0px 4px 20px 0px rgb(172, 172, 3);

    }
    h4,h3{
        color:black!important;
    }
</style>

<div class="container col-xl-10 col-xxl-8 px-4">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-6 text-center text-lg-start text">
            <h1 class="display-4 fw-bold lh-1 mb-3">Just Local Eeat!</h1>
            <p class="col-lg-10 fs-4">Plateforme de vente de produits local. 
                Consommer Local, Naturel, Frais et Bio sans vous deplacer ...
            </p>
        </div>
        <div class="col-md-12 py-5 mx-auto col-lg-6 flex-sm-fill text-sm-center nav-link ">
        <div class="card-text mb-4">
            <h3>
                Réalisée par :
            </h3>
        </div>    
        <div class="card-img mb-4 person">
            <p>
                <img src="images/rebecca.png" alt="">
            </p>
        </div>
        <div class="card-text mb-4">
            <h4>
                Rébecca Yélognissè HOUESSOU
            </h4>
        </div>
            
        </div>
    </div>
</div>


<?php require('includes/footer.php');?>    
