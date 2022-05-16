<?php

    if (isset($_POST['ajout'])) {

        $produit = [
            'user_id' => $_SESSION['user']['user_id']
            'title' => htmlspecialchars($_POST['titre']),
            'price' => htmlspecialchars($_POST['price']),
            'Lprice' => intval($_POST['Lprice']),
            'category' => htmlspecialchars($_POST['categorie']),
            'image' => htmlspecialchars($_POST['image']),
        ];

        $query = $db -> prepare("INSERT INTO produits (user_id, titre, price, Lprice, categorie, image) VALUES (:user_id, :title, :price, :Lprice, :category, :image)");

        $insert = $query -> execute($produit);

        if ($insert) {
            echo "<div class='alert alert-success'>Produit ajouté avec succès !</div>";
        }
        else{
            echo "<div class='alert alert-danger'>Produit non ajouté!</div>";
        }
    }

?>
