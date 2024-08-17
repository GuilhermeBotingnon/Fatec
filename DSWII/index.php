<?php
if($_POST){
    $user = "aluno@fatec.com";
    $userPassword = "Aluno123";

    $password = $_POST["password"];
    $email = $_POST["email"];

    if($email != $user || $password != $userPassword) {
        $error = "Usuário ou Senha Incorretos";
        $password = "";
        $email = "";
    } else {
        header('Location: inscricao.php');
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Área Restrita Login</title>
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <div class="container">
      <div class="icon">
        <img src="src/UserIcon.svg" alt="" />
      </div>
      <div class="title">
        <h1>Área Restrita</h1>
        <hr />
      </div>
      <div class="formInput">
        <form action="#" method="post">
          <input type="email" name="email" id="Email" placeholder="E-mail" required />
          <hr />
          <input
            type="password"
            name="password"
            id="Email"
            placeholder="Senha"
            required
          />
          <hr />
          <input type="submit" value="Entrar" />
          <span class="error">
            <?php 
            if($_POST){
            echo $error;
            }
            ?>
          </span>
        </form>
      </div>
    </div>
  </body>
</html>

