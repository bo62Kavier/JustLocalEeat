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