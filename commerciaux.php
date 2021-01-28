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
    <nav>
        <ul>
            <li><a href="commerciaux.php">Inscription</a></li>
            <li><a href="produits.php">Produits</a></li>
        </ul>
    </nav>
    <form action="commerciaux.php" method="post" class="box-name">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput">
            <label for="floatingInput">Name</label>
        </div>
        <div class="datation">
            <label for="date_inscription">Date :</label>
            <input class="form-control" type="date" placeholder="Readonly input here..." id="date_inscription" name="date_inscription">
        </div>
        <div>
            <input class="btn btn-primary" type="submit" value="Send">
        </div>
    </form>
</body>
</html>