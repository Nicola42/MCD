<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style_produits.css">
    <title>Produits</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="commerciaux.php">Inscription</a></li>
            <li><a href="produits.php">Produits</a></li>
        </ul>
    </nav>
    <form action="produits.php" method="post" class="form_div">
        <div class="nombre">
            <label for="id_produit">id produit</label>
            <input type="number" id="id_produit" name="id_produit"> 
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="nom_produit">
            <label for="floatingInput">Nom produits</label>
        </div>
        <div>
            <input class="btn btn-primary" type="submit" value="Send">
        </div>
    </form>
    <?php
        if (isset($_POST["id_produit"])){
            $servername= "localhost";
            $dataname= "bureautique";
            $user ="root";
            $id_produit = $_POST["id_produit"];
            $nom_produit = $_POST["nom_produit"];

            try {
                $connect = new PDO("mysql:host=$servername; dbname=$dataname", $user);
                // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if (!empty($id_produit) && !empty($nom_produit)) {
                    $variable = $connect->prepare ("INSERT INTO produits (id_produit, nom_produit) VALUES (:id_produit, :nom_produit)");
                    $variable->bindParam(':id_produit', $id_produit);
                    $variable->bindParam(':nom_produit', $nom_produit);
                    $variable->execute();
                }}
            catch (PDOException $e) {
                echo "Erreur : ". $e->getMessage();
            }
        }
    
    ?>
</body>
</html>
