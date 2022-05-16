<?php
    require('includesVendeur/header.php');
?>

<hr>
<div class="container-fluid col-xl-12 col-xxl-8 px-4 py-5 ">
    <div class="row ">
        <div class="col-md-8 offset-md-2 mx-auto col-lg-6 page">
            <h1>Suppresion du produit</h1>

            <?php
                $id = [
                    'id' => intval($_GET['id'])
                ];

                $query = $db -> prepare('SELECT * FROM produits WHERE id=:id');
                $query -> execute($id);

                $produit = $query -> fetch();

                if (!$produit) {
                    header('Location:gestionProduits.php');
                }

                if (isset($_POST['supprimer'])) {

                    $produit = [
                        'id' => intval($_POST['id_produit']),
                    ];

                    $query = $db -> prepare("DELETE FROM produits  WHERE id=:id ");
                    $delete = $query -> execute($produit);

                    if ($delete) {
                        header('Location:gestionProduits.php');
                    } 
                    else {
                       echo "<div class='alert alert-success'>Suppression impossible!</div>";
                    }
                }

            ?>
            <hr>
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
                <input type="hidden" value="<?= $produit['id'] ?>" name="id_produit">

                <button class="w-100 btn btn-lg btn-danger mb-5" name="supprimer" type="submit">
                    Supprimer N°<?= $produit['id'] ?>
                </button>
                
                <a href="gestionProduits.php" class="btn btn-success">Annuler</a>

                <hr class="my-4">
            </form>
        </div>
    </div>
</div>

<?php 
    require('includesVendeur/footer.php');
?>