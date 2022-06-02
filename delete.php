<?php
//delete book
include("conexao.php");

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql_code = "DELETE FROM book WHERE id='".$id."'";
    $result = mysqli_query($conn, $sql_code);

    if($result){
        header("location:book_update.php");
    }
    else{
        echo 'Please Check your Query';
    }
}
else{
    header("location:book_update.php");
}


?>