<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop bonbons / admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <?php

        include "header2.php";

        include "fonctions.php";

        $bdd = connect();

        $sql = "select * from produit";

        $resultat = $bdd -> query($sql);

        while ($produit = $resultat -> fetch(PDO::FETCH_OBJ)){
        echo '
            <div class="card" style="width: 18rem;">
            <img src="'. $produit -> photo .'" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">'. $produit -> nom .'</h5>
                <p class="card-text">'. $produit -> prix .'€</p>
                <a href="modif.php?choix='.$produit->id.'" class="btn btn-info">Modifier</a>
            </div>
            </div>
            ';
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>