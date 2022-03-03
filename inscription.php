<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-color: rgb(241, 241, 241);
        }

        .resize {
            margin-bottom: 10px;
            width: 180px;
            width: 200px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid black;
            padding-left: 10px;
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

        nav {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: row;
            background-color: white;
            height: 60px;
            border-bottom: 1px solid black;
            margin-bottom: 20px;
        }

        #logo {
            height: 45px;
            width: 45px;
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 17px;
            font-family: 'Cairo', sans-serif;
            letter-spacing: 1px;
        }

        a:hover {
            color: rgb(83, 83, 201);
        }
    </style>
</head>

<body>
    <nav>
        <img src="images/logo.png" alt="title" id="logo">
        <a href="index.php">SE CONNECTER</a>
    </nav>

    <center>
        <form action="actions/ajout.php" method="post" enctype="multipart/form-data">
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

            <input type="submit" value="CREER" class="button">
            <input type="reset" value="EFFACER" class="button">
        </form>
    </center>
</body>

</html>