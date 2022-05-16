<?php
    require('includes/header.php');
    require('includes/nav.php');
?> 
<section>
    <div class="container-fluid mt-0 custom-mt">
     <div class="row mt-2 p-5">

         <?php

            $produits = $db->query('SELECT * FROM produits');

            while ($produit = $produits->fetch()) {
            ?>
            <div class="col-md-3 produits animate__animated animate__jello">
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
<?php require('includes/footer.php');?>    
