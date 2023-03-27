<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop bonbons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <!-- <meta http-equiv="refresh" content="3"> -->
  </head>
  <body>
    
    <?php

        include "header.php";

        include "fonctions.php";

        $bdd = connect();

        $sql = "SELECT * FROM produit";

        $resultat = $bdd -> query($sql);

        session_start();

        while ($produit = $resultat -> fetch(PDO::FETCH_OBJ)){
          echo '
            <div class="card" style="width: 18rem;">
              <img src="'. $produit -> photo .'" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">'. $produit -> nom .'</h5>
                <p class="card-text">'. $produit -> prix .'€</p>
                <a href="ajout_panier.php?id='. $produit -> id .'" class="btn btn-primary">Ajouter au panier</a>
              </div>
            </div>
              ';
        }
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>