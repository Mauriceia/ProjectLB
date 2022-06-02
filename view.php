<?php

require_once("conexao.php");
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="styleStd.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
    <h11>Users</h11>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td>User ID</td>
                                <td>Book Name</td>
                                <td>Author</td>
                                <td>Publication</td>
                                <td>Update</td>
                                <td>Delete</td>
                                
                            </tr>

                            <?php

                                
                                while($row=mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    $bookname = $row['bookname'];
                                    $bookauthor = $row['bookauthor'];
                                    $bookpub = $row['boopub'];
                            ?>
                            
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $bookname ?></td>
                                <td><?php echo $bookauthor ?></td>
                                <td><?php echo $bookpub ?></td>
                                <td><a href="edit.php?GetID=<?php echo $id ?>">Update</a></td>
                                <td><a href="delete.php?delete=<?php echo $id ?>">Delete</a></td>

                            
                                
                            </tr>
                            
                            <?php
                                }

                            ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="styleStd.css"/>
    <title>View Records</title>
</head>
<body>

<a href="index.php"><button class="roxobtn">LogOut</button></a>

</body>
</html>