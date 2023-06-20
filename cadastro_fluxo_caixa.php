<?php

    include("conexao.php");

        
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    

    echo "<h3>Dados do Caixa";
    echo "<hr>";
    echo "data: $data <br>";
    echo "tipo: $tipo <br>";
    echo "valor: $valor <br>";
    echo "historico: $historico <br>";
    echo "cheque: $cheque <br>";



$sql = "INSERT INTO prova2 (id_caixa, tipo_caixa, valor_caixa, historico_caixa, cheque_caixa)";

    $sql .= " VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";

?>