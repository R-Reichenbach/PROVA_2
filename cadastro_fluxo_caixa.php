<?php

    include("conexao.php");
    
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    

    $sql = "INSERT INTO VALUES fluxo_caixa (data, tipo, valor, historico, cheque)";

    $sql .= " VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";
  
    echo "<h3>Dados do Caixa";
    echo "<hr>";
    echo "data: $data <br>";
    echo "tipo: $tipo <br>";
    echo "valor: $valor <br>";
    echo "historico: $historico <br>";
    echo "cheque: $cheque <br>";

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";

    $sql .= " VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";

?>