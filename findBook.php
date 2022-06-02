<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search bar </title>
    <link rel="stylesheet" type="text/css" href="styleStd.css">
</head>
<body>
    <div class="container">
    <div class="innerdiv">
    <div class="row"><img class="imglogo" src="images/logo.png" /></div>
    <div class="leftinnerdiv">
    </div>
    <form  method="post">
    <div class="container">
    <div class="search_op">
    <div class="search_box">
    <input class="search" type="text" name="search" placeholder="Search..."/>
    <input class="botao" type="submit" name="submit" />
    <i class="fa fa-search"></i><br /><br />
    
   
</div>
</div>
</div>
  
    </form>
</div>
</div>
</body>
</html>

<?php 
$conn = new PDO("mysql: host=localhost;dbname=login", 'root','2BfmCmwFs21@');

if(isset($_POST["search"])){
    $ipp = $_POST["search"];
    $sth = $conn->prepare("SELECT * FROM `book` WHERE bookname = '$ipp'");
    
    $sth -> setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth -> fetch()){
        ?>
    <br /><br /><br />
    <table style="width:70%">           
    <tr>
    <th>Book Name</th>
    <th>Author</th>
    <th>Publication</th>
  <!-- <th>Cover</th>--> 
    </tr>               
    <tr>
    <td><?php echo $row -> bookname;?></td>
    <td><?php echo $row -> bookauthor;?></td>
    <td><?php echo $row -> bookpub;?></td>
  <!--  <td><?php echo $row -> bookpic;?></td>    -->        
    </tr>          
    </table>

<?php
    }
    else{
        echo "Book does not exist under that name in this database. ";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- <link rel="stylesheet" a href="styleStd.css"/>-->
    <title>View Records</title>
</head>
<body>

<a href="painel2.php"><button class="logbtn">Back</button></a>

</body>
</html>