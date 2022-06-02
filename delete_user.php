<?php

include("conexao.php");

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql_code = "DELETE FROM users WHERE id='".$id."'";
    $result = mysqli_query($conn, $sql_code);

    if($result){
        header("location:member_record.php");
    }
    else{
        echo 'Please Check your Query';
    }
}
else{
    header("location:member_record.php");
}


?>