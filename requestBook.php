<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "login";


$conn = new mysqli($host, $username, $password, $database);

//condicao
if($conn->error) {
    die("Falha ao conectar ao banco de dados: " . $conn->error);
    
}


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

<style>
    img{
    width: 100% !important;
    height: 200px !important;
    object-fit: contain;
    padding: 5px;
    color:#052b36;
    }

    h3{
    text-align: center;
    white-space: nowrap;
    font-size:20px;
    }

    h6{
    text-align: center;
    }


</style>

</head>

<body>
    <section>
        <!--Navigation-->
        <nav>
            <!--logo-->
            <a href="#" class="logo">Eeyore's Library</a>
            <!--menu-->
            <ul>         
            </ul>
        </nav>
    </section>


    <div class="container">
        
        <div class="row">
            
                <div class="row">
                <?php 
                $sql = "SELECT * FROM getbook";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                   // echo $row['id']." ".$row['bookname']." ".$row['image']." ".$row['bookprice']."<br>";
                ?>

            <div class="col-md-3 text-center mt-5" >
                   <img src="images/<?php echo $row['image']?>" alt="">
                   <h3> <?php echo $row['bookname']?></h3>

                    <div class="form-group">
                        
                        <input type="hidden" id="bookname<?php echo $row['id']?>" value="<?php echo $row['bookname']?>" />
                     

                        <a href="contactUs.php"><button class="btn bnt-danger add" data-id="<?php echo $row['id']?>">Request Book</button></a>
                    </div>    
                </div>
                <?php 
                }
                ?>
            </div>
  
 </div> 



     

    </div>
   

</body>
</html>


<?php
mysqli_close($conn);
?>


