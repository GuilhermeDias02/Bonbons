<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop bonbons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    
    <?php
        include "header.php";

        include "fonctions.php";

        $bdd = connect();

        $recherche = $_POST["recherche"];

        $sql = "select * from produit where nom LIKE LOWER('%$recherche%') or prix LIKE '%$recherche%'";

        $resultat = $bdd -> query($sql);

        while ($produit = $resultat -> fetch(PDO::FETCH_OBJ)){
          echo '
            <div class="card" style="width: 18rem;">
              <img src="'. $produit -> photo .'" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">'. $produit -> nom .'</h5>
                <p class="card-text">'. $produit -> prix .'€</p>
                <a href="#" class="btn btn-primary">Acheter</a>
              </div>
            </div>
              ';
        }
    ?>
  </body>
</html>