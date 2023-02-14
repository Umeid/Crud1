<?php

    include 'conexao.php';

    $nom = $_POST['nome'];
    $an = $_POST['ano'];
    $paga = $_POST['pagamento'];
    $val = $_POST['valor'];
    $modal = $_POST['modalidade'];
    $curs = $_POST['curso'];

    $sql = "INSERT INTO `dados`(`Nome`, `Ano`, `Metodo_Pagamento`, `Valor`, `Modalidade`, `Curso`) VALUES ('$nom',$an,'$paga',$val,'$modal', '$curs')";

    $inserir = mysqli_query($conexao, $sql);

?>