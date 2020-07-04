<?php

    include("php/conexao.php");

    $funcionario_id = intval($_GET['id']);

    $sql_code = "DELETE FROM CLIENTE WHERE id = '$cliente_id'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    if($sql_query)
        echo "<script> location.href='listagem-cliente.php';</script>";
    else echo "<script> alert('Não foi possível deletar o cliente.'); location.href='cliente-funcionario';</script>";    
?>