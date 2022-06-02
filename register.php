<?php 

//include 'conexao.php';
$host = "localhost";
$username = "root";
$password = "";
$database = "login";


$conn = new mysqli($host, $username, $password, $database);


//condicao
if($conn->error) {
    die("Falha ao conectar ao banco de dados: " . $conn->error);
    
}

$username = $_POST[('username')];
$email = $_POST[('email')];
$password = $_POST[('password')];

$sql_code = "INSERT INTO users( username, email, password)  VALUES('$username', '$email', '$password')";

if(mysqli_query($conn, $sql_code)){
    //echo "User registered";
}else {
    echo "Unable to register user!"; //mysql_error($conn);
}
mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style_2.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            
			<div class="input-group">
				<button name="submit" onclick="myFunction()" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login_member.php">Login Here</a>.</p>
		</form>
	</div>

	<p id="repo"></p>
<script>
function myFunction() {
  var txt;
  if (confirm("You are resgisted!")) {
    txt = "ok";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("repo").innerHTML = txt;
}
</script>

</body>
</html>

