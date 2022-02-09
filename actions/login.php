<?php
$email = $_POST["login"];
$mdp = $_POST["pw"];

$con = mysqli_connect("localhost", "root", "ilyas-2002", "tp4");
$sql = "select * from users where email = '$email' and mdp = '$mdp'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION["id"] = $row["id"];
    $_SESSION["photo"] = $row["photo"];
    header("location: ../leftmenu/accueil.php");
    exit();
} 
else {
    header("location: ../index.php?message:error");
    exit();
}
