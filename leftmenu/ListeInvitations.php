<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitations</title>
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

        #me {
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
        }

        .liste {
            display: flex;
            align-items: center;
            margin: 20px 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid grey;
            justify-content: end;
        }

        .liste img {
            width: 55px;
            height: 50px;
            margin-right: 20px;
            margin-left: -720px;
        }

        .fullname {
            margin-left: -650px;
        }

        .liste li {
            list-style-type: none;
        }

        .liste a {
            text-decoration: none;
            margin-right: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: black;
            text-transform: uppercase;
        }

        footer {
            width: 100%;
            height: 60px;
            background-color: black;
        }
    </style>
</head>

<?php
@session_start();
$photo = "../users/user_" . $_SESSION["id"] . "/" .  $_SESSION["photo"];
?>

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
            <ul class="p" >
                <li><img src="../images/home.png"></li>
                <li><a href="accueil.php">Accueil</a></li>
            </ul>
            <ul class="p" id="me">
                <li><img src="../images/invite.png"></li>
                <li><a href="ListeInvitations.php">Invitations</a></li>
            </ul>
            <ul class="p">
                <li><img src="../images/friends.png"></li>
                <li><a href="friends.php">Amis</a></li>
            </ul>
        </div>
        <div id="d2">

            <?php
            $con = mysqli_connect("localhost", "root", "ilyas-2002", "tp4");
            @session_start();
            $id = $_SESSION["id"];
            $sql1 = "select expdUser from invitations where Etat = 'En Attente' and DestUser = $id";
            $result1 = mysqli_query($con, $sql1);
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $iddexp = $row1["expdUser"];
                $sql2 = "select * from users where id = $iddexp";
                $result2 = mysqli_query($con, $sql2);
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $iddes = $row2["id"];
                    $photo = $row2["photo"];
            ?>
                    <ul class="liste">
                        <li><img src="<?php echo ("../users/user_$iddes/$photo") ?>"></li>
                        <li><a class ="fullname" href="#"><?php echo ($row2["name"] . " " . $row2["surname"]) ?></a></li>
                        <li><a href="<?php echo ("../actions/acceptInvitaion.php?user1=$id&user2=$iddexp") ?>">Accepter</a></li>
                        <li><a href="<?php echo ("../actions/refuseInvitation.php?user1=$id&user2=$iddexp") ?>">Refuser</a></li>
                    </ul>

            <?php
                }
            }
            ?>

        </div>
    </main>

    <footer>

    </footer>
</body>

</html>