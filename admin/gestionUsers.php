<?php
    require('includesVendeur/header.php');
    require('includesVendeur/nav.php');

?>

        
<div class="container-fluid col-xl-12 col-xxl-8 px-4 py-5">
    <div class="row ">
        <div class="col-md-8 offset-md-2 mx-auto col-lg-6">
            <h1 class="display-4 fw-bold lh-1 mb-5">Liste des utilisateurs</h1>
            <div class="table-reponsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Pseudo</th>
                        <th>Email</th>
                    </tr>
                    <?php
                        $users = $db -> query ('SELECT * FROM users');
                    ?>

                    <?php
                        while ($user = $users -> fetch()) {
                    ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['firstname'] ?> </td>
                        <td><?= $user['pseudo'] ?> </td>
                        <td><?= $user['mail'] ?> </td>
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