<?php
$con = mysqli_connect("localhost", "root", "ilyas-2002", "tp4");

$me = $_POST["me"];
$you = $_POST["you"];
$content = $_POST["content"];

$sql = "insert into messages(user1,user2,content) values ($me,$you,'$content')";
mysqli_query($con,$sql);

header("Location: ../leftmenu/newmessage.php?user=$you");
exit();