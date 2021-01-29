<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
$produits=$connect->query('SELECT * FROM produit');
?>
<select >
<?php foreach($commerciaux as $value) : ?>
    <option value="<?= $value['id_commerciaux']; ?>"><?= $value['nom_commerciaux']; ?></option>
<?php endforeach; ?>

</select>
<select >
<?php foreach($produits as $value2) : ?>
    <option value="<?= $value2['nom_produit']; ?>"><?= $value2['nom_produit']; ?></option>
<?php endforeach; ?>

</select>
</body>
</html>