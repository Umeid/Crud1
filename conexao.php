<?php

$servername = "localhost";
$database = "registro";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername, $username, $password, $database);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="margin-top: 30px; ">
    
    <h4 style="text-align: center; ">Registro efectuado com Sucesso</h4>

    <a href="index.php" role="button" class="btn btn-success btn-sm" style="margin-left: 470px;"> Fazer novo registro</a>

</div>