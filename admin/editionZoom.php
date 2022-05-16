<?php
    require('includesVendeur/header.php');
?>
<hr>
<div class="container-fluid col-xl-12 col-xxl-8 px-4 py-5">
    <div class="row ">
        <div class="col-md-8 offset-md-2 mx-auto col-lg-6">
            <h1 style="text-align:center;">Modification du zoom</h1>
            <a href="gestionzooms.php" class="btn btn-secondary">
                Retour à la liste des zoom 
            </a>
                
            <?php
                $id = [
                    'id' => intval($_GET['id'])
                ];

                $query = $db -> prepare ('SELECT * FROM zooms WHERE id=:id');
                $query -> execute($id);

                $zoom = $query -> fetch();

                if (!$zoom) {
                    header('Location:gestionZoom.php');
                }

                if (isset($_POST['modifier'])) {
                    $array = explode('/', $_FILES['image']['type']);
                    $ext = end($array);


                    if (isset($_FILES['image'])) {
                        $image_uploaded = $_FILES['image'];
                        $name = date('dmYHis') . '.' . $ext;
                        move_uploaded_file($image_uploaded['tmp_name'], '../uploads/zooms/' . $name);
                        $image = 'http://localhost/JustLocalEeat/uploads/zooms/' . $name;
                    } 
                    else {
                        $image = $zoom['image'];
                    }

                    $zoom = [
                        'id' => intval($_POST['id_zoom']),
                        'title' => htmlspecialchars($_POST['title']),
                        'description' => htmlspecialchars($_POST['author']),
                        'image' => $image,
                    ];

                    $query = $db -> prepare("UPDATE  zooms SET   title=:title, description=:description, image=:image WHERE id=:id ");

                    $update = $query -> execute($zoom);

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
                <input type="hidden" value="<?= $zoom['id'] ?>" name="id_zoom">
                <div class="form-floating mb-3 me-5">
                    <input type="text" value="<?= $zoom['title'] ?>" class="form-control" required name="title" id="title" placeholder="titre du zoom">
                    <label for="title">Titre</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea value="<?= $zoom['description'] ?>" required name="description" id="description" cols="30" class="form-control" rows="10"></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" value="" class="form-control" name="image" id="image" placeholder="Lien de l'image">
                    <label for="image">image</label>
                    <a href="<?= $zoom['image'] ?>" target="_blank"><img src="<?= $zoom['image'] ?>" height="75" alt=""></a>
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