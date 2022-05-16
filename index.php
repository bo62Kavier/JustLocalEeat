<?php
    require('includes/header.php');
    require('includes/nav.php');
?>    

<!-- ======= SECTION 1 ======== -->
    <section class="carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="slide p-5" >
                        <h1 id="titre" class="animate__animated animate__backInLeft"> Just Local Eeat</h1>
                        <p  id="detail">
                            Consommation Local 
                            Naturel et Bio
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>            
<!-- ========= END SECTION 1 ========= -->

<!-- ======= SECTION 2 ======== -->
<section>
    <div class="container-fluid mt-0 custom-mt">
        <div class="row p-5">

         <?php

            $produits = $db->query('SELECT * FROM produits');

            while ($produit = $produits->fetch()) {
            ?>
            <div class="col-md-3 produits animate__animated animate__tada">
                <div class="card produit">
                    <div class="card-header">
                            <button disabled="disabled">
                                <?= $produit['price']?> FCFA
                            </button> 
                    </div>
                     <div class="card-body">
                         
                        <img src="<?= $produit['image'] ?>" alt="">
                        <p>
                            <br>

                             <?= substr($produit['titre'], 0, 65) ?>...
                         </p>
                     </div>
                     <div class="card-footer">
                         <button type="reset">
                         <a href="paiement.php?id=<?= $produit['id'] ?>" class="btn">Payer</a>
                         </button>
                     </div>
                 </div>
             </div>

         <?php

            }

            ?>

     </div>
 </div>
    
</section>
<!-- ========= END SECTION 2 ========= -->


<?php require('includes/footer.php');?>    
               