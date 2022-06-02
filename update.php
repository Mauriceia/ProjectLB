<?php

require_once("conexao.php");

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $bookname = $_POST['bookname'];
    $bookauthor = $_POST['bookauthor'];
    $bookpub = $_POST['bookpub'];
    $branch = $_POST['branch'];
    $bookprice = $_POST['bookprice'];
    $bookquantity = $_POST['bookquantity'];



    $sql_code = "UPDATE book SET bookname='".$bookname."', bookauthor='".$bookauthor."', bookpub='".$bookpub."', branch='".$branch."', bookprice='".$bookprice."', bookquantity='".$bookquantity."' WHERE id='".$id."'";
    $result = mysqli_query($conn, $sql_code);

    if($result){
        header("location:book_update.php");
    }
    else{
        echo ' Please Check Your Query';
    }
}
else{
    //echo ' It Did not work';
    header("location:book_update.php");
}

?>