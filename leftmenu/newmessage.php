<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Message</title>

    <?php
    $con = mysqli_connect("localhost", "root", "ilyas-2002", "tp4");
    @session_start();
    $id = $_SESSION["id"];
    $photo = "../users/user_" . $_SESSION["id"] . "/" .  $_SESSION["photo"];
    ?>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        nav {
            background-color: white;
            height: 60px;
        }

        .header_menu {
            display: flex;
            align-items: center;
            list-style-type: none;
        }

        #logo {
            height: 45px;
            width: 45px;
            margin-right: 750px;
            margin-left: 100px;
        }

        .header_menu li {
            margin: 5px;
            font-family: 'Cairo', sans-serif;
            letter-spacing: 1px;
        }

        .header_menu img {
            width: 40px;
            height: 40px;
        }

        #formu {
            display: flex;
            align-items: center;
        }

        #input {
            margin-left: -100px;
            width: 200px;
            height: 30px;
            border-radius: 5px;
            border: 1px solid black;
        }

        .header_menu a {
            text-decoration: none;
            color: black;
            font-size: 17px;
        }

        .header_menu a:hover {
            color: rgb(83, 83, 201);
        }

        main {
            border-top: 1px solid black;
            height: 600px;
            width: 100%;
            background-color: white;
            display: flex;
            align-items: center;
        }

        #d1 {
            width: 30%;
            height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: start;
            background-color: rgb(190, 190, 250);
            border-right: 1px solid black;
        }

        .p {
            list-style-type: none;
            display: flex;
            align-items: center;
            flex-direction: row;
            padding: 10px;
        }

        .p:hover {
            background-color: white;
            color: blue;
        }

        img {
            width: 40px;
            height: 40px;
            margin: 0px 40px 0px 40px;

        }

        #me1 {
            background-color: white;
            color: blue;
        }

        a {
            text-decoration: none;
            color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
        }

        #d2 {
            width: 70%;
            height: 600px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #card {
            width: 400px;
            height: 500px;
            border: 1px solid black;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;

        }

        #card-header {
            width: 100%;
            height: 70px;
            background-color: white;
            border-bottom: 1px solid black;
            display: flex;
            justify-content: start;
            align-items: center;
        }

        #card-header li {
            list-style-type: none;
        }

        #card-header img {
            width: 55px;
            height: 50px;
            margin-right: 20px;
        }

        #card-header p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: black;
            text-transform: uppercase;
            font-size: 20px;
            margin-left: 25px;
        }

        #card-content {
            width: 100%;
            height: 400px;
            background-color: white;
            border-bottom: 1px solid black;
            overflow-y: scroll;
        }

        #card-content li {
            list-style-type: none;
        }

        #me {
            background-color: rgb(76, 226, 176);
            color: black;
            margin: 5px 5px 5px 200px;
            padding: 5px;
            border-radius: 5px;
            overflow-wrap: break-word;
        }

        #you {
            background-color: black;
            width: fit-content;
            height: fit-content;
            color: white;
            margin: 5px 5px 5px 10px;
            padding: 5px;
            border-radius: 5px;
        }

        form {
            width: 100%;
            display: flex;
        }

        #textbox {
            width: 80%;
            height: 28px;
            background-color: white;
            border: 0px;
            border-bottom: 1px solid black;
            border-right: 1px solid black;  
            font-family:'Courier New', Courier, monospace;
            font-size: 18px;
            color: black;
            padding-left: 30px;
        }

        #textbox::placeholder{
            color: black;
            padding-left: -20px;
        }

        #send {
            background-color: black;
            border: 0px;
            border-bottom: 1px solid black;
            width: 20%;
            color : white;
            cursor: pointer;
            margin-right: -1px;
        }

        footer {
            width: 100%;
            height: 60px;
            background-color: black;
        }
    </style>
</head>
</head>

<body>
    <nav>
        <ul class="header_menu">
            <li><img src="../images/logo.png" alt="title" id="logo"></li>
            <li><a href="../profil.php"><img src="<?php echo $photo ?>"></a></li>
            <li><a href="../actions/logout.php">SE DECONNECTER</a></li>
        </ul>
    </nav>

    <main>
        <div id="d1">
            <ul class="p">
                <li><img src="../images/home.png"></li>
                <li><a href="accueil.php">Accueil</a></li>
            </ul>
            <ul class="p">
                <li><img src="../images/invite.png"></li>
                <li><a href="ListeInvitations.php">Invitations</a></li>
            </ul>
            <ul class="p" id="me1">
                <li><img src="../images/friends.png"></li>
                <li><a href="friends.php">Amis</a></li>
            </ul>
        </div>

        <div id="d2">

            <?php
            if (isset($_GET["user"])) {
            ?>
                <div id="card">

                    <ul id="card-header">

                        <?php
                        $user = $_GET["user"];
                        $sql = "select * from users where id = $user";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_row($result);
                        $photo = $row[9];
                        $name = $row[2];
                        $surname = $row[3];
                        ?>

                        <li><img src="<?php echo ("../users/user_$user/$photo") ?>"></li>
                        <li>
                            <p><?php echo ($name . " " . $surname) ?></p>
                        </li>
                    </ul>

                    <ul id="card-content">
                        <?php
                        $sql1 = "select user1,user2,content from messages where (user1 = $id and user2 = $user ) or (user2 = $id and user1= $user)";
                        $result1 = mysqli_query($con, $sql1);
                        while ($row = mysqli_fetch_row($result1)) {
                            if ($id == $row[0]) {
                                echo ("<li id='me'>" . $row[2] . "</li>");
                            } else if ($id == $row[1]) {
                                echo ("<li id='you'>" . $row[2] . "</li>");
                            }
                        }
                        ?>
                    </ul>

                    <form method="post" action="../actions/addmessage.php">
                        <input type="text" id="textbox" placeholder="Enter a Message" name="content">
                        <input type="hidden" value="<?php echo ($id) ?>" name="me">
                        <input type="hidden" value="<?php echo ($user) ?>" name="you">
                        <input type="submit" id="send" value="Envoyer">
                    </form>

                </div>

            <?php
            }
            ?>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>