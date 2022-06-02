<?php

require_once("conexao.php");

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $sql_code = "UPDATE users SET username='".$username."', email='".$email."', password='".$password."'WHERE id='".$id."'";
    $result = mysqli_query($conn, $sql_code);

    if($result){
        header("location:member_record.php");
    }
    else{
        echo ' Please Check Your Query';
    }
}
else{
    //echo ' It Did not work';
    header("location:member_record.php");
}

?>