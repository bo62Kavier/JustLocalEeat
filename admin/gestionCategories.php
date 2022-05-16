<?php
    require('includesVendeur/header.php');
    require('includesVendeur/nav.php');
?>

    <div class="container-fluid col-xl-12 col-xxl-8 px-4 py-5">
        <div class="row d-flex">
            
            <div class="col-md-5 mx-auto col-lg-6">
                <h1>Ajouter un produit</h1>
                
                <hr>
                <?php 
                    if (isset($_POST['ajout'])) {

                        $produit = [
                            'user_id' => $_SESSION['user']['user_id'],
                            'titre' => htmlspecialchars($_POST['titre']),
                            'price' => htmlspecialchars($_POST['price']),
                            'Lprice' => intval($_POST['Lprice']),
                            'category' => htmlspecialchars($_POST['categorie']),
                            'image' => htmlspecialchars($_POST['image']),
                        ];

                        $query = $db -> prepare("INSERT INTO produits (user_id, titre, price, Lprice, categorie, image) VALUES (:user_id, :titre, :price, :Lprice, :category, :image)");

                        $insert = $query -> execute($produit);

                        if ($insert) {
                            echo "<div class='alert alert-success'>Produit ajouté avec succès !</div>";
                        }
                        else{
                            echo "<div class='alert alert-danger'>Produit non ajouté!</div>";
                        }
                    }
                ?>
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
                    <div class="d-flex">
                        <div class="form-floating mb-3 me-3">
                            <input type="text" class="form-control" required name="titre" id="titre" placeholder="Titre du produit">
                            <label for="titre">Nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" required name="price" id="author" placeholder="Auteur du livre">
                            <label for="price">Prix</label>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-floating mb-3 me-3">
                            <input type="text" class="form-control" required name="Lprice" id="price" placeholder="Prix du livre">
                            <label for="Lprice">Frais de Livraison</label>
                        </div>
                        <div class="form-floating mb-3 ">
                            <select name="categorie" required id="categorie" class="form-control">
                                <option value="">Choisir une catégorie</option>
                                <option value="cereale">Céréale</option>
                                <option value="Tubercule">Tubercule</option>
                                <option value="Farine">Farine</option>
                                <option value="Protides">Protides</option>
                                <option value="Autres">Autres</option>
                            </select>
                            <label for="categorie">Catégorie</label>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" required name="image" id="image" placeholder="Lien de l'image">
                        <label for="image">image</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" name="ajout" type="submit">Ajouter</button>
                    <hr class="my-4">

                </form>
            </div>

            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1">Liste des Produits</h1>
                <div class="table-reponsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Prix livraison</th>
                            <th>Plus de détails</th>
                        </tr>
                        <?php
                            $produits = $db -> query('SELECT * FROM produits');
                        ?>

                        <?php
                            while ($produit = $produits -> fetch()) {
                        ?>
                        <tr>
                            <td><?= $produit['id'] ?></td>
                            <td><?= $produit['titre'] ?></td>
                            <td><?= $produit['price'] ?> FCFA</td>
                            <td><?= $produit['Lprice'] ?> FCFA</td>
                            <td>
                                <a class="btn btn-primary" title="Modifier le produit " href="edition.php?id=<?= $produit['id'] ?>"> <i class="bi bi-pencil"></i> </a> &nbsp;
                                <a class="btn btn-danger" title="Supprimer le produit" href="suppression.php?id=<?= $produit['id'] ?>"> <i class="bi bi-trash"></i> </a>
                            </td>
                        </tr>

                        <?php
                            }
                        ?>
                    </table>    
                </div>
            </div>
        </div>
    </div>


<?php 
    require('includesVendeur/footer.php');
?>    