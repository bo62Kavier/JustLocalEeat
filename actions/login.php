
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