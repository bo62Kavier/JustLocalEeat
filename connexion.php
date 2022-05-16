<?php 
    require('includes/header.php'); 
    // require('includes/nav.php');
?>


<div class="container col-xl-10 col-xxl-8 px-2">
    <div class="row align-items-center g-lg-5 py-4">
        <div class="col-md-12 mx-auto col-lg-8 offset-lg-2">

            <div class="card mb-5 p-2">
                <div class="card-header">
                    <h5 class="card-title" id="loginLabel" style="text-align:center">
                        Connectez-vous à votre compte
                    </h5>
                </div>
                <div class="card-body">

                    <?php 
                        if (isset($_POST['connexion'])) {
                            $user = [
                                'mdp' => hash('sha512', $_POST['mdp']),
                                'pseudo' => $_POST['pseudo'],
                            ];
                            try {
                                $select = $db -> prepare ('SELECT * FROM  users WHERE pseudo=:pseudo AND mdp=:mdp');
                                $select -> execute($user);

                                $user_connect = $select -> fetch();

                                if($user_connect){
                                    unset($user['mdp']);

                                    $user['user_id'] = $user_connect['id'];
                                    $user['rule'] = $user_connect['rule'];
                                    $user['mail'] = $user_connect['mail'];

                                    $_SESSION['user'] = $user;
                       
                                    if( $user_connect['rule'] == "ADMIN" ){
                                        header('Location: admin/index.php');
                                    }
                                    else{
                                        header('Location:profil.php');
                                    }
                                }
                                else{
                                    echo "<div class='alert alert-danger'> Vos informations ne correspondent pas!</div>";
                                }
                             }
                            catch (PDOException $e) {
                                if ($e->getCode() == 23000) {
                                    echo "<div class='alert alert-danger'> Votre pseudo existe déjà ! </div>";
                                } 
                                else {
                                    echo $e->getMessage();
                                }
                            }
                        }
                    ?>
                    
                    <form class="p-4 p-md-3 border rounded-3 bg-light" method="post" action="">
                                <div class="form-floating mb-3">
                            <input type="text" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo" required class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Votre pseudo</label>
                        </div>
               
                        <div class="form-floating mb-3">
                            <input type="password" name="mdp" required class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mot de passe</label>
                        </div>
               
                        <button class="w-100 btn-lg" style="color:white;background-color:rgb(107, 2, 67);border:1px solid rgb(107, 2, 67);" name="connexion" type="submit">Connexion</button>
                        <br><br>                    
                        
                    </form>
                </div>
                <div class="card-footer">
                    <h5>
                        <a class="flex-sm-fill text-sm-center nav-link" style="color:rgb(107, 2, 67);" href="inscription.php" >
                            Je n'ai pas de compte, je m'incris
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>