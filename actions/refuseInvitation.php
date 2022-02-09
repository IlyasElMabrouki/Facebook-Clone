<?php
$con = mysqli_connect("localhost", "root", "ilyas-2002", "tp4");
$user1 = $_GET["user1"];
$user2 = $_GET["user2"];
$sql = "delete from invitations where expdUser = $user2  and destUser = $user1";
mysqli_query($con, $sql);
header("location: ../leftmenu/friends.php");
exit();