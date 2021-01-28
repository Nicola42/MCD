<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style_commerciaux.css">
    <title>Inscription</title>
</head>
<body>
    <form action="commerciaux.php" method="post">
        <div>
            <label for="nom_commerciaux">Nom :</label>
            <input type="text" id="nom_commerciaux" name="nom-commerciaux">
        </div>
        <div>
            <label for="date_inscription">Date :</label>
            <input type="date" id="date_inscription" name="date_inscription">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>