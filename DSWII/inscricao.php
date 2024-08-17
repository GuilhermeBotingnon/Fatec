<?php


if($_POST){


    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userName = $_POST["userName"];
    $userEmail = $_POST["email"];
    $endereco = $_POST["endereco"];
    $unidade = $_POST["unidade"];
    $periodo1 = $_POST["periodo1"];
    $periodo2 = $_POST["periodo2"];
    $cep = $_POST["CEP"];
    $cidade = $_POST["nomeCidade"];
    $estado = $_POST["nomeEstado"];
  
    

    if($periodo1 != "" && $periodo2 != ""){
    $periodo = $periodo1 . " E " . $periodo2;
    } else if ($periodo1 != "" && $periodo2 == "" ) {
    $periodo = $periodo1;

    } else {
    $periodo = $periodo2;

    }
    
    $address = $cidade . ", " . $estado;
    $name = $firstName . " " . $lastName ;
    
}


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscricao Formulario</title>
    <link rel="stylesheet" href="css/form.css" />
  </head>
  <body>
    <div class="container">
      <div class="headerTitle">
        <img src="src/ComputerIcon.png" alt="" />
        <h1>Inscrição</h1>
        <h2>Curso Superior em Desenvolvimento de Software Multiplataforma</h2>
      </div>
      <div class="contactForm">
        <h1>Dados Pessoais</h1>
        <div class="formInput">
          <form action="#" method="post" id="contactForm">
            <div class="formGroup">
              <label for="firstName"> Primeiro Nome </label>
              <input type="text" name="firstName" required />
            </div>
            <div class="formGroup">
              <label for="lastName"> Último nome </label>
              <input type="text" name="lastName" required/>
            </div>
            <div class="formGroup2">
              <label for="userName"> Nome de usuário </label>
              <input type="text" name="userName" required/>
            </div>
            <div class="formGroup2">
              <label for="email"> E-mail </label>
              <input
                type="email"
                name="email"
                placeholder="email@email.com"
                required
              />
            </div>
            <div class="formGroup2">
              <label for="endereco"> Endereço </label>
              <input type="text" name="endereco"  required/>
            </div>
            <div class="formGroup3">
              <label for="nomeCidade"> Cidade </label>
              <input type="text" name="nomeCidade" required/>
            </div>
            <div class="formGroup3">
              <label for="nomeEstado"> Estado </label>
              <select name="nomeEstado" id="estado" required></select>
                
              </select>
            </div>
            <div class="formGroup3">
              <label for="CEP"> CEP </label>
              <input type="number" name="CEP" maxlength="9" required/>
            </div>
            <div class="formGroup4">
              <hr />
              <h1>Unidade</h1>
            </div>
            <div class="formGroup5">
            <input type="radio" name="unidade" value="Sede" checked="checked" required/>
            <label for="unidade">Sede</label>
            </div>
            <div class="formGroup5">
              <input type="radio" name="unidade" value="Extensao" required />
              <label for="unidade">Extensao</label>
            </div>
            <div class="formGroup4">
              <hr />
              <h1>Período</h1>
            </div>
            <div class="formGroup5">
            <input type="checkbox" name="periodo1"  value="" hidden checked="checked"/>
              <input type="checkbox" name="periodo1" id="periodo1" value="Vespertino" />
              <label for="periodo">Vespertino</label>
            </div>
            <div class="formGroup5">
            <input type="checkbox" name="periodo2"  value="" hidden checked="checked"/>
              <input type="checkbox" name="periodo2" id="periodo2" value="Noturno"/>
              <label for="periodo">Noturno</label>
            </div>
            <div class="formGroup4">
              <hr />
              <div id="formButton">
                <input type="submit" value="Cadastrar" onClick=formConfirm() />
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="resumeForm">
        <h1>Resumo</h1>
        <div class="resumeInfo">
          <div class="resumeInput">
            <label for="userName">Nome</label>
            <input type="text" disabled value="<?php if($_POST) {
              echo $name;
            } else {
              echo "...";
            } ?>"/>
          </div>
          <div class="resumeInput">
            <label for="userName">Úsuario</label>
            <input type="text" disabled value="<?php if($_POST) {
              echo $userName;
            } else {
              echo "...";
            } ?>"/>
          </div>
          <div class="resumeInput">
            <label for="userName">E-mail</label>
            <input type="text" disabled value="<?php if($_POST) {
              echo $userEmail;
            } else {
              echo "...";
            } ?>"/>
          </div>
          <div class="resumeInput">
            <label for="userName">Endereço</label>
            <input type="text" disabled value="<?php if($_POST) {
              echo $endereco;
            } else {
              echo "...";
            } ?>"/>
            <br>
            <input type="text" disabled value="<?php if($_POST) {
              echo $address;
            } else {
              echo "...";
            } ?>"/>
          </div>
          <div class="resumeInput">
            <label for="userName">Unidade e Periodo</label>
            <input type="text" disabled value="<?php if($_POST) {
              echo $periodo;
            } else {
              echo "...";
            } ?>"/>
          </div>
        </div>
      </div>
    </div>
    <script src="js/estados.js"></script>
  </body>
</html>
