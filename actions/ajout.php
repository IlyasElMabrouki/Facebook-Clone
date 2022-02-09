<?php

$con = mysqli_connect("localhost","root","ilyas-2002","tp4");

if ($_FILES["photo"]["type"] == "image/png" && $_FILES["photo"]["error"] == 0){
       $photo = $_FILES["photo"]["name"];
       $sql = "insert into users(titre,name,surname,email,mdp,branche,tel,adresse,photo) values ( '". $_POST["titre"] ."', '".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["email"]."' , '".$_POST["mdp"]."' , '".$_POST["branche"]."' , '".$_POST["tel"]."' , '".$_POST["adresse"]."','$photo')";
       mysqli_query($con,$sql);
       $id= mysqli_insert_id($con);
       mkdir("../users/user_$id");
       move_uploaded_file($_FILES["photo"]["tmp_name"],"../users/user_$id/$photo"); 
}
else {
    $photo = "barca.png";
    $sql = "insert into users(titre,name,surname,email,mdp,branche,tel,adresse,photo) values ( '". $_POST["titre"] ."', '".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["email"]."' , '".$_POST["mdp"]."' , '".$_POST["branche"]."' , '".$_POST["tel"]."' , '".$_POST["adresse"]."','$photo')";
    mysqli_query($con,$sql);
    $id= mysqli_insert_id($con);
    mkdir("../users/user_$id");
    copy("C:\\xampp\\htdocs\\TP4\\barca.png","../users/user_$id/$photo");
}


header("location: ../index.php?message:comptecréer");
exit();