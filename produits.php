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
    <form action="produits.php" method="post">
        <div>
            <label for="id_produit">id_produit</label>
            <input type="number" id='id_produit' name='id_produit'> 
        </div>
        <div>
            <label for="nom_produit">nom_produit</label>
            <input type="text" id='texte' name='name'>
        </div>
            <input type='sumbit' value='send'>
    ></form>
</body>
</html>