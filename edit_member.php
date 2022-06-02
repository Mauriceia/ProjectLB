<?php

include("conexao.php");
$id = $_GET['id'];
$sql_code = "SELECT * FROM users WHERE id='".$id."'";
$result = mysqli_query($conn, $sql_code);

while($row=mysqli_fetch_assoc($result)){
     $id = $row['id'];
     $username = $row['username'];
     $email = $row['email'];
     $password = $row['password'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration Form</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update user details</h3>
                        </div>
                        <div class="card-body">

                            <form action="update_user.php?id=<?php echo $id?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder="User Name" name="username" value="<?php echo $username ?>">
                                <input type="text" class="form-control mb-2" placeholder="Email'" name="email" value="<?php echo $email ?>">
                                <input type="text" class="form-control mb-2" placeholder="User Password" name="password" value="<?php echo $password ?>">

                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
