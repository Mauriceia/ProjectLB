<?php
session_start();
include("conexao.php");

$bookname = $_POST['bookname'];
$bookdetail = $_POST['bookdetail'];
$bookauthor = $_POST['bookauthor'];
$bookpub = $_POST['bookpub'];
$branch = $_POST['branch'];
$bookprice = $_POST['bookprice'];
$bookquantity = $_POST['bookquantity'];
//$bookrent = $_POST['bookrent'];

$sql_code = "INSERT INTO book (bookname, bookdetail, bookauthor, bookpub, branch, bookprice, bookquantity) 
VALUES ('".$bookname."', '".$bookdetail."', '".$bookauthor."', '".$bookpub."', '".$branch."', '".$bookprice."', '".$bookquantity."')";

//$sql_code = "INSERT INTO book (bookname, bookdetail, bookauthor, bookpub, branch, bookprice, bookquantity) 
//VALUES ('$bookname', '$bookdetail', '$bookauthor', '$bookpub', '$branch', '$bookprice', '$bookquantity')";

if(move_uploaded_file($_FILES["bookphoto"]["tmp_name"], "imagesup/".$_FILES["bookphoto"]["name"])){
   echo "Book was added.";
    $bookpic=$_FILES["bookphoto"]["name"];
}

if(mysqli_query($conn, $sql_code)){
   // echo " New record created successfully!";
    
}
else{
   // echo "Error. ".$sql_code. " " .mysqli_error($conn);
}
mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css" /> 
    <title>Login</title>


</head>
<body>
    <div class="center">

    <h1>Add Book</h1>
    <form action="" method="POST" enctype="multipart/form-data">
 <div class="txt_field" >     
<label >Book Name:</label><br><input type="text" name="bookname" ><br><span></span>

 <div class="txt_field" ><br />
     <label >Detail:</label><br></div><input type="text" name="bookdetail" >
<span></span>

     <div class="txt_field" >
     <label >Author:</label><br></div><input type="text" name="bookauthor" >
<span></span>

   
     <div class="txt_field" >
     <label >Publication:</label><br></div><input type="text" name="bookpub" >
<span></span>

         <div class="radio" ><span></span>
     <div>Branch:<br><input type="radio" name="branch" value="Technology"/>Technology<input type="radio" name="branch" value="religion"/>Religion<div style="margin-left:0px"><input type="radio" name="branch" value="Educational"/>Educational<input type="radio" name="branch" value="sfic"/>Science Fiction</div>
            </div> 
<span></span>
     <div class="txt_field" ><br />
     <label >Price:</label><br></div><input type="number" name="bookprice" >
<span></span>
     <div class="txt_field" >
     <label >Quantity:</label><br></div><input type="number" name="bookquantity" >
<span></span>

     <div class="txt_field" >
     <label >Book Image:</label><br></div><input type="file" name="bookphoto" >
<span></span>
     <br />


        <button class="btnindex" type="submit">Submit</button><br /><br />
        
       
    </form>
    </div>
</body>
</html>