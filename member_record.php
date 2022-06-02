<?php

include("conexao.php");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>
<style> 
a {background-color: #94c7de; text-decoration:none; border:#0a3443; padding: 4px 20px; resize:both; margin-left:0; margin-right:0; position:center;} 
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
    <h11>Update Member</h11>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                               <td><b>User ID</b></td>
                                <td><b>User Name</b></td>
                                <td><b>Email</b></td>
                                <td><b>Password</b></td>                               
                            </tr>

                            <?php

                                
                                while($row=mysqli_fetch_assoc($result)){
                                    $id = $row['id'];
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    $password = $row['password'];
                                    
                            ?>
                            
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $username ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $password ?></td>

                                <td><a href="edit_member.php?id=<?php echo $id ?>"><b>Update</b></a></td>
                                <td><a href="delete_user.php?del=<?php echo $id ?>"><b>Delete</b></a></td>

                            
                                
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

