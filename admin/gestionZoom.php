<?php
    require('includesVendeur/header.php');
    require('includesVendeur/nav.php');
?>

    <div class="container-fluid col-xl-12 col-xxl-8 px-4 py-5">
        <div class="row d-flex">
            
            <div class="col-md-5 mx-auto col-lg-5">
                <h1>Ajouter un Zoom</h1>
                
                <hr>
                <?php 
                    if (isset($_POST['ajout'])) {

                        $zoom = [
                            'user_id' => $_SESSION['user']['user_id'],
                            'title' => htmlspecialchars($_POST['title']),
                            'description' => htmlspecialchars($_POST['description']),
                            'image' => htmlspecialchars($_POST['image']),
                        ];

                        $query = $db -> prepare("INSERT INTO zooms (user_id, title, description, image) VALUES (:user_id, :title, :description, :image)");

                        $insert = $query -> execute($zoom);

                        if ($insert) {
                            echo "<div class='alert alert-success'>Zoom ajouté avec succès !</div>";
                        }
                        else{
                            echo "<div class='alert alert-danger'>Zoom non ajouté!</div>";
                        }
                    }
                ?>
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" required name="title" id="title" placeholder="Titre du Sujet">
                        <label for="title">Titre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="description" id="description" cols="30" class="form-control" rows="10"></textarea>
                        <label for="description">Description </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" name="image" id="image" placeholder="Lien de l'image">
                        <label for="image">image</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" name="ajout" type="submit">Ajouter le Zoom</button>
                    <hr class="my-4">

                </form>
            </div>

            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1">Liste des Zoom</h1>
                <div class="table-reponsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Plus de détails</th>
                        </tr>
                        <?php
                            $zooms = $db -> query('SELECT * FROM zooms');
                        ?>

                        <?php
                            while ($zoom = $zooms -> fetch()) {
                        ?>
                        <tr>
                            <td><?= $zoom['id'] ?></td>
                            <td><?= $zoom['title'] ?></td>
                            <td><?= $zoom['description'] ?> </td>
                            <td><?= $zoom['image'] ?> </td>
                            <td>
                                <a class="btn btn-primary" title="Modifier le zoom " href="editionZoom.php?id=<?= $zoom['id'] ?>"> <i class="bi bi-pencil"></i> </a> &nbsp;
                                <a class="btn btn-danger" title="Supprimer le zoom" href="suppressionZoom.php?id=<?= $zoom['id'] ?>"> <i class="bi bi-trash"></i> </a>
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

<?php require('includesVendeur/footer.php');?>
