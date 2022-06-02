<?php

include("conexao.php");
$id = $_GET['id'];
$sql_code = "SELECT * FROM book WHERE id='".$id."'";
$result = mysqli_query($conn, $sql_code);

while($row=mysqli_fetch_assoc($result)){
     $id = $row['id'];
     $bookname = $row['bookname'];
     $bookauthor = $row['bookauthor'];
     $bookpub = $row['bookpub'];
     $branch = $row['branch'];
     $bookprice = $row['bookprice'];
     $bookquantity = $row['bookquantity'];

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
                            <h3 class="bg-success text-white text-center py-3"> Update Book details</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?id=<?php echo $id?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder="Book Title" name="bookname" value="<?php echo $bookname ?>">
                                <input type="text" class="form-control mb-2" placeholder="Author's Name'" name="bookauthor" value="<?php echo $bookauthor ?>">
                                <input type="number" class="form-control mb-2" placeholder="Publication Year" name="bookpub" value="<?php echo $bookpub ?>">
                                <input type="text" class="form-control mb-2" placeholder="Genre" name="branch" value="<?php echo $branch ?>">
                                <input type="text" class="form-control mb-2" placeholder="Price'" name="bookprice" value="<?php echo $bookprice ?>">
                                <input type="number" class="form-control mb-2" placeholder="Quantity" name="bookquantity" value="<?php echo $bookquantity ?>">



                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>



