<?php
$con = mysqli_connect("localhost", "root", "ilyas-2002", "tp4");
$idexp = $_GET["exp"];
$iddes = $_GET["des"];

$sql1 = "select * from invitations where (expdUser = $idexp and DestUser = $iddes) or (expdUser = $iddes and DestUser = $idexp)";
$result = mysqli_query($con, $sql1);

if (mysqli_num_rows($result) == 0){
    $sql = "insert into invitations(expdUser,destUser,etat) values ($idexp,$iddes,'En Attente')";
    mysqli_query($con, $sql);
    header("location: ../leftmenu/accueil.php?error=no");
    exit();
}
else {
    header("location: ../leftmenu/accueil.php?error=yes");
    exit();
}


