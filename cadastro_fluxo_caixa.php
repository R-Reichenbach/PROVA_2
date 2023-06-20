<?php

    include('conexao.php');
    
    $id_caixa = $_POST['id_caixa'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1>Alteração de dados</h1>";
    echo "<p>Caixa: $id_caixa</p>";
    {
        $sql = "UPDATE fluxo_caixa SET 
            nome_usuario='$nome',
            email_usuario='$email',
            fone_usuario='$telefone',
            senha='$senha'
            WHERE id_usuario=$id_usuario";
    }else{
        $sql = "UPDATE usuario SET z
            nome_usuario='$nome',            
            email_usuario='$email',
            fone_usuario='$telefone',
            senha='$senha',
            foto = '$nome_foto'
            WHERE id_usuario=$id_usuario";
    }

    echo $sql;
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ".mysqli_error($con)."!";

?>
        <a href="index.php">Voltar</a>;