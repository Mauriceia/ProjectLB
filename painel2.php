<?php 



?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <link rel="stylesheet" href="">
    <title></title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="styleStd.css" />
    </head>

    <body>
        <!-- visual-->
        <div class="container">
        <div class="innerdiv">
        <div class="row"><img class="imglogo" src="images/logo.png" /></div>
        <div class="leftinnerdiv">
        <h8>Hello, <?php echo $_SESSION['username']; ?> </h8>  <br /><br /><h1>Welcome to our Page, We are here to help!</h1> 
    <!--botoes-->
       <!--  <button class="roxobtn">You are a Member Now</button>-->
        <!---->
        <a href="findBook.php"><button class="roxobtn">Search Book</button></a>
        <a href="requestBook.php"><button class="roxobtn">Request Book</button></a>
        <a href="articles.php"><button class="roxobtn">Our Articles</button></a>
        
        <a href="pageOne.php"><button class="roxobtn">LogOut</button></a>
        </div>       
        </div>
        </div>

</body>
</html>