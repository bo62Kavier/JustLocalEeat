 <!-- ========= FOOTER ========= -->
    <footer style="height:  550px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="modal-contentp p-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginLabel" style="color:white;">
                                Merci de laisser un message
                            </h5>
                        </div>
                        <div class="modal-body">
                            <form class="bg-black" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" required class="form-control" id="floatingInput" placeholder="John Doe">
                                    <label for="floatingInput">Votre Nom et prénom</label>
                                </div>
               
                                <div class="form-floating mb-3">
                                    <input type="text" name="mdp" required class="form-control" id="floatingInput" placeholder="name@gmail.com">
                                    <label for="floatingInput">Votre mail</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea value="" required name="message" id="message" cols="30" class="form-control" rows="10"></textarea>
                                    <label for="message">Votre message</label>
                                </div>
                            </form>
                            <button class="w-100" disabled="disabled" name="contact">
                                <a href="mailto:reb.houessou@gmail.com" style="text-decoration:none;color:white;">Envoyer</a>    
                            </button>
                        </div>
                        <div class="modal-footer">
                            <h5 class="modal-title" id="loginLabel" style="color:white;">
                                Contact :
                            </h5>
                            <form class=" p-4 p-md-3 bg-black" method="post" >
                                <div class="form-floating mb-3">
                                    <button disabled="disabled">
                                        <a href="tel:+22969382521" style="text-decoration:none;color:white;">
                                            <i class="bi bi-whatsapp"></i> +229 69382521
                                        </a>
                                    </button>
                                </div>
                                <div class="form-floating mb-3">
                                    <button disabled="disabled">
                                        <a href="tel:+22960764440" style="text-decoration:none;color:white;">
                                            <i class="bi bi-telephone"></i> +229 60764440
                                        </a>
                                    </button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-6 mt-5">
                    <div class="modal-contentp mt-2 p-0">
                        
                        <div class="modal-body">
                            <h5 class="modal-title" id="loginLabel" style="color:white;">
                                A propos :
                            </h5>
                            <form class="p-4 p-md-3 bg-black" method="post" >
                                <div class="form-floating mb-3">
                                    <button disabled="disabled" style="color:white;">
                                        <strong>Just Local Eeat</strong>, plateforme
                                        de vente de produits local. <br> Mange béninois chez nous.
                                    </button>
                                </div>
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <h5 class="modal-title" id="loginLabel" style="color:white;">
                                Nos atouts :
                            </h5>
                            <form class="p-4 p-md-3 bg-black" method="post" >
                                <div class="form-floating mb-3" >
                                    <button disabled="disabled" style="color:white;">
                                        Nous sommes entièrement à votre disposition :
                                        <ul style="list-style:none;">
                                            <li> <i class="bi bi-wallet"></i> Paiement 100% sécurisé</li>
                                            <li><i class="bi bi-credit-card"></i> Paiement mobile money</li>
                                            <li><i class="bi bi-person-heart"></i> Assistance 24 heures/7jours </li>
                                            <li><i class="bi bi-truck"></i> Livraison disponible </li>
                                            <li><i class="bi bi-tags"></i> Garantis de meilleurs prix</li>
                                        </ul>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>
            All rights reserved &copy; <?= date('Y') ?> | Just Local Eeat inc
        </p>
    </footer>
<!-- ========= END FOOTER ========= -->

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

    <script src="javascript/style.js"></script>   

  </body>
</html>