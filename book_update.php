<?php

require_once("conexao.php");
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);
?>
<style> 
a {background-color: #94c7de; text-decoration:none; border:#076f66; padding: 4px 20px; resize:both; margin-left:0; margin-right:0; position:center;} 
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="style.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
    <h11>Update Book</h11>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                               <td><b>User ID</b></td>
                                <td><b>Book Name</b></td>
                                <td><b>Author</b></td>
                                <td><b>Publication</td></b>
                                <td><b>Genre</b></td>
                                <td><b>Price</b></td>
                                <td><b>Quantity</td></b>
                                <td><b>Update</b></td>
                                <td><b>Delete</b></td>
                                
                            </tr>

                            <?php

                                
                                while($row=mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    $bookname = $row['bookname'];
                                    $bookauthor = $row['bookauthor'];
                                    $bookpub = $row['bookpub'];
                                    $branch = $row['branch'];
                                    $bookprice = $row['bookprice'];
                                    $bookquantity = $row['bookquantity'];

                            ?>
                            
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $bookname ?></td>
                                <td><?php echo $bookauthor ?></td>
                                <td><?php echo $bookpub ?></td>
                                <td><?php echo $branch ?></td>
                                <td><?php echo $bookprice ?></td>
                                <td><?php echo $bookquantity ?></td>
                                <td><a href="edit.php?id=<?php echo $id ?>"><b>Update</b></a></td>
                                <td><a href="delete.php?del=<?php echo $id ?>"><b>Delete</b></a></td>                                
                           </tr>
                            
                            <?php
                                }

                            ?>

                        </table>

                    <a href="painel.php" class="logbtn">Back</a>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

