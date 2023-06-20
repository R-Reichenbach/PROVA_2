<?php 
    include('conexao.php');
    $id_caixa = $_GET['id_caixa'];
    $sql = "delete from fluxo_caixa where id_caixa = '$id_caixa'";

    echo "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados excluídos com sucesso!";
    else
    echo "Erro ao tentar excluir!";

?>
<br>
<a href="listar_fluxo_caixa.php">Voltar</a>