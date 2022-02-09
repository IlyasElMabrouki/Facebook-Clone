<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceBook - Connexion Ou Inscription</title>
    <style>
         * {
            margin: 0px;
            padding: 0px;
        }
        
        body {
            background-color: rgb(241, 241, 241);
        }
        nav {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: row;
            background-color: white;
            height: 60px;
            border-bottom: 1px solid black;
        }

        #logo {
            height: 45px;
            width: 45px;
            margin-left: -200px;
        }

        .header_menu {
            display: flex;
            align-items: center;
        }

        .header_menu li {
            display: inline;
            margin: 5px;
            font-family: 'Cairo', sans-serif;
            letter-spacing: 1px;
        }

        .header_menu a {
            text-decoration: none;
            color: black;
            font-size: 17px;
        }

        .header_menu a:hover {
            color: rgb(83, 83, 201);
        }

        .input {
            width: 200px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid black;
            padding-left: 10px;
        }

        #submit{
            padding: 5px 10px 5px 10px;
            background-color: black;
            border: 1px solid black;
            color:white;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <nav>
        <img src="images/logo.png" alt="title" id="logo">
        <form method="POST" action="actions/login.php">
            <ul class="header_menu">
                <li><input type="text" name="login" placeholder="Adresse e-mail" class="input" ></li>
                <li><input type="password" name="pw" placeholder="Mot de passe" class="input" ></li>
                <li><input type="submit" name="submit" value="SE CONNECTER" id="submit"></li>
                <li><a href="actions/inscription.php">S'INSCRIRE</a></li>
            </ul>
        </form>
    </nav>
</body>

</html>