<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin ajout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <?php
    include "header2.php";
    include "fonctions.php";

    $bdd = connect();
  ?>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomProduit" class="form-label">Produit</label>
            <input type="text" class="form-control" id="nomProduit" name="produit" placeholder="ex: bananes">
        </div>
        <div class="mb-3">
            <label for="Prix" class="form-label">Prix</label>
            <input type="text" class="form-control" id="Prix" name="prix" placeholder="ex: 1.50">
        </div>
        <div class="mb-3">
            <a>Image du produit</a><input type="file" class="form-control" name="nameImage">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

    <?php
        if(isset($_POST['produit']) && isset($_POST['prix']) && isset($_FILES)){
          $produit = $_POST['produit'];
          $prix = $_POST['prix'];

          $nom_image = basename($_FILES["image"]['nameImage']);
          $chemin_destination = 'images/' . $nom_image;
          $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin_destination);

          ajout($produit, $prix, $chemin_destination, $bdd);
        }

        //mettre un ifexist avant d'executer la fonction pour vérifier si le post est rempli

        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>