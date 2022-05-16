<?php
    require('includesVendeur/header.php');
?>
<hr>
<div class="container-fluid col-xl-12 col-xxl-8 px-4 py-5">
    <div class="row ">
        <div class="col-md-8 offset-md-2 mx-auto col-lg-6">
            <h1 style="text-align:center;">Modification du produit</h1>
            <a href="gestionProduits.php" class="btn btn-secondary">
                Retour à la liste des produits 
            </a>
                
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

                if (isset($_POST['modifier'])) {
                    $array = explode('/', $_FILES['image']['type']);
                    $ext = end($array);


                    if (isset($_FILES['image'])) {
                        $image_uploaded = $_FILES['image'];
                        $name = date('dmYHis') . '.' . $ext;
                        move_uploaded_file($image_uploaded['tmp_name'], '../uploads/produits/' . $name);
                        $image = 'http://localhost/JustLocalEeat/uploads/produits/' . $name;
                    } 
                    else {
                        $image = $produit['image'];
                    }

                    $produit = [
                        'id' => intval($_POST['id_produit']),
                        'titre' => htmlspecialchars($_POST['titre']),
                        'price' => htmlspecialchars($_POST['author']),
                        'Lprice' => intval($_POST['price']),
                        'category' => htmlspecialchars($_POST['categorie']),
                        'image' => $image,
                    ];

                    $query = $db -> prepare("UPDATE  produits SET titre=:titre, price=:price, Lprice=:Lprice, categorie=:category, image:image WHERE id=:id ");

                    $update = $query -> execute($produit);

                    if ($update) {
                        echo "<div class='alert alert-success'>Modification éffectuée !</div>";
                    } 
                    else {
                        echo "<div class='alert alert-danger'>Une erreur est survenue!</div>";
                    }
                }
            ?>
            <hr>
            <form enctype="multipart/form-data" class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
                <div class="d-flex">
                    <input type="hidden" value="<?= $produit['id'] ?>" name="id_produit">
                    <div class="form-floating mb-3 me-5">
                        <input type="text" value="<?= $produit['titre'] ?>" class="form-control" required name="titre" id="titre" placeholder="Titre du produit">
                        <label for="titre">Nom</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="<?= $produit['price'] ?>" class="form-control" required name="price" id="price" placeholder="Auteur du produit">
                        <label for="price">Prix</label>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-floating mb-3 me-5">
                        <input type="text" value="<?= $produit['Lprice'] ?>" class="form-control" required name="Lprice" id="Lprice" placeholder="Prix du produit">
                        <label for="Lprice">Prx Livraison</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="categorie" required id="categorie" class="form-control">
                            <option value="">Choisir une catégorie</option>
                            <option <?= $produit['categorie'] == 'Cereale' ?  'selected' : '' ?> value="Cereale">Cereale</option>
                            <option <?= $produit['categorie'] == 'Tubercule' ?  'selected' : '' ?> value="Tubercule">Tubercule</option>
                            <option <?= $produit['categorie'] == 'Farine' ?  'selected' : '' ?> value="Farine">Farine</option>
                            <option <?= $produit['categorie'] == 'Protides' ?  'selected' : '' ?> value="Protides">Protides</option>
                            <option <?= $produit['categorie'] == 'Autres' ?  'selected' : '' ?> value="Autres">Autres</option>
                        </select>
                        <label for="categorie">Catégorie</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" value="" class="form-control" required name="image" id="image" placeholder="Lien de l'image">
                    <label for="image">image</label>
                    <a href="<?= $produit['image'] ?>" target="_blank"><img src="<?= $produit['image'] ?>" height="75" alt=""></a>
                </div>

                <button class="w-100" name="modifier" type="submit" style="background-color:rgb(248, 211, 3);color:white;border:none;font-size 20px;height:6vh;">
                    Mettre à jour 
                </button>
                <hr class="my-4">

            </form>
        </div>
    </div>
</div>


<?php 
    require('includesVendeur/footer.php');
?>    