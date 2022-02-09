<?php
$con = mysqli_connect("localhost", "root", "ilyas-2002", "tp4");
$user1 = $_GET["user1"];
$user2 = $_GET["user2"];
$sql = "insert into amis(user1,user2,etat) values ($user1,$user2,'OK')";
$sql1 = "update invitations set Etat = 'accepté' where expdUser = $user2 and DestUser = $user1";
mysqli_query($con, $sql);
mysqli_query($con, $sql1);
header("location: ../leftmenu/friends.php");
exit();
