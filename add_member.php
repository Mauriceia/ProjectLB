<?php
session_start();

include("conexao.php");

$conn = new mysqli($host, $username, $password, $database);

$username = $_POST['username'];
$email= $_POST['email'];
$password = $_POST['password'];

$sql_code = "INSERT INTO users (username, email, password) 
VALUES ('".$username."', '".$email."', '".$password."' )";


if(mysqli_query($conn, $sql_code)){
 //  echo " New record created successfully!";
    header("add_member.php");
    
}
else{
   echo "Error. ".$sql_code. " " .mysqli_error($conn);
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

    <h1>Sign Up a Member</h1>
    <form action="" method="POST">
 <div class="txt_field" >     

<label >Member Name:</label><br>
  <input type="text"  name="username" ><br>
     <span></span>

 <div class="txt_field" > 
     <br /><label >Email:</label><br>
</div>
  <input type="email"  name="email" ><br><br>
<span></span>
     <div class="txt_field" > 
     <br /><label >Password:</label>
<input type="password"  name="password" ><br><br>
         <span></span>
</div>

  </div> 
        <button class="btnindex" type="submit" onclick="myFunction()" value="submit">Add Member</button><br /><br />  

	<p id="repo"></p>
<script>
function myFunction() {
  var txt;
  if (confirm("Member was Added!")) {
    txt = "ok";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("repo").innerHTML = txt;
}
</script>


    </form>
    </div>
 <a href="painel.php"><button class="logbtn" >Back</button></a>

    

</body>
</html>
