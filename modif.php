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

    $choix = $_GET["choix"];
    
    echo '<form action="" method="POST">
        <div class="mb-3">
            <label for="colonneProduit" class="form-label">Colonne</label>
            <input type="text" class="form-control" id="colonneProduit" name="colonne" placeholder="ex: nom, prix, photo">
        </div>
        <div class="mb-3">
            <label for="Valeur" class="form-label">Valeur</label>
            <input type="text" class="form-control" id="Valeur" name="valeur" placeholder="ex: bananes, 1.50, Images/bananes.png">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>';

    if(isset($_POST['colonne']) && isset($_POST['valeur'])){
        $colonne = $_POST['colonne'];
        $valeur = $_POST['valeur'];

        modifier($colonne, $choix, $valeur, $bdd);
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>