<?php
    require('includesVendeur/header.php');
?>

<hr>
<div class="container-fluid col-xl-12 col-xxl-8 px-4 py-5 ">
    <div class="row ">
        <div class="col-md-8 offset-md-2 mx-auto col-lg-6 page">
            <h1>Suppresion du zoom</h1>

            <?php
                $id = [
                    'id' => intval($_GET['id'])
                ];

                $query = $db -> prepare('SELECT * FROM zooms WHERE id=:id');
                $query -> execute($id);

                $zoom = $query -> fetch();

                if (!$zoom) {
                    header('Location:gestionZooms.php');
                }

                if (isset($_POST['supprimer'])) {

                    $zoom = [
                        'id' => intval($_POST['id_zoom']),
                    ];

                    $query = $db -> prepare ("DELETE FROM zooms  WHERE id=:id ");
                    $delete = $query -> execute($zoom);

                    if ($delete) {
                        header('Location:gestionZoom.php');
                    } else {
                       echo "<div class='alert alert-success'>Suppression impossible!</div>";
                    }
                }

            ?>
            <hr>
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
                <input type="hidden" value="<?= $zoom['id'] ?>" name="id_zoom">

                <button class="w-100 btn btn-lg btn-danger mb-5" name="supprimer" type="submit">
                    Supprimer
                </button>
                
                <a href="gestionZoom.php" class="btn btn-success">Annuler</a>

                <hr class="my-4">
            </form>
        </div>
    </div>
</div>

<?php 
    require('includesVendeur/footer.php');
?>