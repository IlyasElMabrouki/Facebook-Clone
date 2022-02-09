<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        .resize {
            margin-bottom: 10px;
            width: 180px;
            height: 25px;
        }

        .button {
            color: white;
            background-color: black;
            border: 1px solid black;
            border-radius: 50px;
            padding: 7px;
            margin-left: 20px;
        }

        .button:hover {
            color: black;
            background-color: white;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <center>
        <form action="ajout.php" method="post" enctype="multipart/form-data">
            <label>Titre:</label>
            <label>M</label> <input type="radio" name="titre" value="M">
            <label>Mme</label> <input type="radio" name="titre" value="Mme">
            <label>Mlle</label> <input type="radio" name="titre" value="Mlle"><br>

            <label>Nom:</label> <input type="text" name="name" placeholder="NOM" class="resize"><br>
            <label>Prenom:</label> <input type="text" name="surname" placeholder="PRENOM" class="resize"><br>
            <label>Email:</label> <input type="text" name="email" placeholder="EMAIL" class="resize"><br>
            <label>Mot De Passe:</label> <input type="password" name="mdp" placeholder="MOT DE PASSE" class="resize"><br>
            <label>Confirmer Mot De Passe:</label> <input type="password" name="mdp2" placeholder="MOT DE PASSE" class="resize"><br>

            <label>Branche:</label>
            <select name="branche" class="resize">
                <option value="DSI">DSI</option>
                <option value="SE">SE</option>
                <option value="CPI">CPI</option>
                <option value="MI">MI</option>
                <option value="PME/PMI">PME/PMI</option>
            </select><br>

            <label>Telephone:</label> <input type="text" name="tel" placeholder="TELEPHONE" class="resize"><br>
            <label>Adresse:</label> <input type="text" name="adresse" placeholder="ADRESSE" class="resize"><br>
            <label>Chosisez une photo:</label> <input type="file" name="photo"><br><br>

            <input type="submit" value="ENVOYER" class="button">
            <input type="reset" value="EFFACER" class="button">
        </form>
    </center>
</body>

</html>