<?php
    require('includes/header.php');
    require('includes/nav.php');
?> 

<form action="" method="post">

</form>


        

        
<div class="container col-xl-10 col-xxl-8 px-0">
    <div class="row align-items-center g-lg-2 py-4">
        <div class="col-lg-6 text-center text-lg-start text">
            <h1 class="display-5 fw-bold lh-1 mt-5 mb-3">Payment sécurisée!</h1>
            <p class="col-lg-10 fs-4">Pour effectuer l'achat de ce  produit,
                <br><br>
                <img src="images/oeuf.png" alt="" srcset=""> 
                <br> <br>
                vueillez remplir le formulaire suivant .... <br>
            </p>
        </div>
        <div class="col-md-12 mx-auto col-lg-6 ">
            <?php 
            // require('actions/payAction'); 
            ?>
            <form class="p-2 p-md-5 mt-5 border rounded-3 bg-light" method="post">
                <div class="form-floating mb-5 text-center">
                    <img src="images/momoMTN.png" alt="" srcset="">
                </div>    
                <input type="hidden" value="<?= $produit['price'] ?>" name="id_zoom">
                <div class="form-floating mb-4">
                    <input type="number" name="" required class="form-control" id="floatingnumber" placeholder="Password">
                    <label for="floatingPassword">Saissisez votre Numéro MoMo</label>
                </div>
                <button class="w-100" name="pay" type="reset" style="background-color:rgb(248, 211, 3);border:none;color:white;height:8vh">
                    Valider
                </button>
            </form>
        </div>
    </div>
</div>






    <br><br><br><br>
<?php require('includes/footer.php');?>  