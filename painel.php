<?php

//include('protect.php');

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
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <!-- visual-->
        <div class="container">
        <div class="innerdiv">
        <div class="row"><img class="imglogo" src="images/logo.png" /></div>
        <div class="leftinnerdiv">
            <h1>Welcome to our Page, We are here to help!</h1> <?php echo $_SESSION['nome']; ?> <br /><br />
    <!--botoes-->
        <!-- <button class="roxobtn">Administrative</button>-->
        <a href="lb_profile.php"><button class="roxobtn">Labrarian Profile</button></a>
        <a href="add_member.php"><button class="roxobtn">Add Member</button></a>
        <a href="add_book.php"><button class="roxobtn">Add Book</button></a>
        <a href="book_update.php"><button class="roxobtn">Book Update</button></a>
        <a href="member_record.php"><button class="roxobtn">Member Record</button></a>
        <a href="pageOne.php"><button class="roxobtn">LogOut</button></a>
        </div>       
        </div>
        </div>

      



</body>
</html>