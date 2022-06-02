<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
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

    <h1>Login to Your Account</h1>
    <form action="" method="POST">
 <div class="txt_field" >     

<label >Email:</label><br>
  <input type="text" id="fname" name="email" ><br>
     <span></span>
 <div class="txt_field" > 
     <br /><label >Password:</label><br>
</div>
  <input type="password" id="password" name="senha" ><br><br>
<span></span>
  </div> 
        <button class="btnindex" type="submit">Login</button><br />
        
        <br><div class="pass">Forgot Password?</div>
    </form>
    </div>
</body>
</html>


