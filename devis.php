<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style_devis.css">
    <title>Devis</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="commerciaux.php">Inscription</a></li>
            <li><a href="produits.php">Produits</a></li>
            <li><a href="devis.php">Devis</a></li>
        </ul>
    </nav>

    <?php
        $servername= "localhost";
        $dataname= "bureautique";
        $user ="root";
        try{
            $connect = new PDO("mysql:host=$servername; dbname=$dataname", $user);
        }
        catch (PDOException $e){
            echo "Erreur :". $e->getMessage();
        }

        $commerciaux=$connect->query('SELECT * FROM commerciaux');
        $produits=$connect->query('SELECT * FROM produits');
    ?>
    <form action="#" method="post">
    <select>
        <?php foreach($commerciaux as $value) : ?>
            <option value="<?= $value['id_commerciaux']; ?>"><?= $value['nom_commerciaux']; ?></option>
        <?php endforeach; ?>

    </select>
    <select >
        <?php foreach($produits as $value2) : ?>
            <option value="<?= $value2['nom_produit']; ?>"><?= $value2['nom_produit']; ?></option>
        <?php endforeach; ?>
    </select>
        <div>
            <label for="nbre_produit">Nombre produits</label>
            <input type="number" id="nbre_produit" name="nbre_produit" min="1">
        </div>
        <div>
            <label for="mht_produit">Montant ht</label>
            <input type="number" id="mht_produit" name="mht_produit">
        </div>
        <div>
            <label for="num_devis">N° devis</label>
            <input type="number" id="num_devis" name="num_devis">
        </div>
        <div>
            <label for="date_devis">date</label>
            <input type="date" id="date_devis" name="date_devis">
        </div>
    </form>

</body>
</html>