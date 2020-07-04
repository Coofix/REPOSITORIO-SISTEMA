<?php

    include("php/conexao.php");

    $funcionario_id = intval($_GET['id']);

    $sql_code = "DELETE FROM FUNCIONARIO WHERE id = '$funcionario_id'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    if($sql_query)
        echo "<script> location.href='listagem-funcionario.php';</script>";
    else echo "<script> alert('Não foi possível deletar o funcionario.'); location.href='listagem-funcionario';</script>";    
?>