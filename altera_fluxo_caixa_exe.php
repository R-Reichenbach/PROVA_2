<?php

    include('conexao.php');
    
    $id_caixa = $_POST['id_caixa'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1>Alteração de dados</h1>";

        $sql = "UPDATE fluxo_caixa SET 
            id_caixa='$id_caixa',
            data='$data',
            tipo='$tipo',
            valor='$valor',
            historico='$historico',
            cheque='$cheque'

            WHERE id_caixa='$id_caixa'";

    echo $sql;
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ".mysqli_error($con)."!";

?>
        <a href="index.php">Voltar</a>;