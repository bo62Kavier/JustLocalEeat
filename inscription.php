<?php
    require('includes/header.php');
    require('includes/nav.php');
?> 

<div class="container col-xl-10 col-xxl-8 px-2">
    <div class="row align-items-center g-lg-5 py-4">
        <div class="col-lg-6 text-center text-lg-start text">
            <h1 class="display-4 fw-bold lh-1 mb-3">Compte gratuit !</h1>
            <p class="col-lg-10 fs-4">Pour accéder à la plateforme et effectuer des achats,
                vueillez vous inscrire en remplissant le formulaire .... <br>
                <br> J'ai déjà un compte,  
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#login" style="color:rgb(107, 2, 67);text-decoration: none;">
                    SE CONNECTER
                </a>
            </p>
        <hr>
        </div>

        <div class="col-md-12 mx-auto col-lg-6 ">
            <?php
                if(isset($_POST['inscription'])){

                    $user = [
                        'nom' => $_POST['name'],
                        'prenom' => $_POST['firstname'],
                        'pseudo' => $_POST['pseudo'],
                        'mail' => $_POST['mail'],
                        'mdp' => hash('sha512', $_POST['mdp']),
                    ];
        
                    try{
                        $insert = $db -> prepare ('INSERT INTO users(name, firstname, pseudo, mail, mdp) VALUES (:nom, :prenom, :pseudo, :mail, :mdp)');
                        $result = $insert->execute($user);

                        if ($result) {
                            unset($user['mdp']);

                            $user['rule'] = 'USER';
                            $user['user_id'] = 0;

                            $_SESSION['user'] = $user;

                            header('Location:profil.php');                            
                        }
                        else{
                            echo '<div class="alert alert-danger"> Inscription échouée! </div>';
                        }
                    }
                    catch (PDOException $e) {
                        if ($e->getCode() == 23000) {

                            echo "<div class='alert alert-danger'> Votre pseudo existe déjà ! </div>";
                        }
                        else{
                            echo $e->getMessage();
                        }
                    }
                }
            ?>
            <form class="p-2 p-md-5 mt-5 border rounded-3 bg-light" method="post">
                <div class="d-flex">
                    <div class="form-floating mb-4 me-3">
                        <input type="text" maxlength="255" value="" name="name" required class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Nom </label>
                    </div>
                    <div class="form-floating mb-4 ">
                        <input type="text" maxlength="255" value="" name="firstname" required class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Prenoms </label>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-floating mb-4 me-3">
                        <input type="text" maxlength="15" value="" name="pseudo" required class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Votre pseudo</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" maxlength="255" value="" name="mail" required class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Adresse email</label>
                    </div>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="mdp" required class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <div class="checkbox mb-4">
                    <label>
                        <input type="checkbox" value="remember-me" required> J'accepte les conditions du site
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" name="inscription" type="submit">S'inscrire</button>
                <hr class="my-4">
                <small class="text-muted">En cliquant sur ce lien vous accepter les conditions d'utilisation du site.</small>
            </form>
        </div>
    </div>
</div>

<?php require('includes/footer.php'); ?>