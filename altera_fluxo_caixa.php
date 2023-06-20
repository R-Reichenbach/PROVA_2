<?php 
    include('conexao.php');
    $id_caixa = $_GET['id_caixa']; 
    $sql = "select * from fluxo_caixa where id_caixa = $id_caixa";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Usuários - IFSP</h1>
    <form action="altera_fluxo_caixa_exe.php" method="POST" enctype="multipart/form-data">
    <input name ="id_caixa" type="hidden" value="<?php echo $row['id_caixa']?>">

    <div>
        <label for="data">Data:</label>
        <input type="date" name="data" value="('y-m-d')" id="data" value="<?php echo $row['data']?>">
    </div>

    <div>
        <label for="tipo">Tipo</label>

        <input type="radio" id="entrada" name="tipo" value="entrada" <?php if ($row['tipo'] == 'entrada') echo 'checked'?>>
        <label for="entrada">Entrada</label>
        
        <input type="radio" id="saida" name="tipo" value="saida" <?php if ($row['tipo'] == 'saida') echo 'checked'?>>
        <label for="saida">Saída</label>
    </div>
    <div>
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" value="<?php echo $row['valor']?>">
    </div>

    <div>
        <label for="historico">Historico:</label>
        <input type="text" name="historico" id="historico" value="<?php echo $row['historico']?>">
    </div>


    <div>
        <label for="cheque">Cheque:</label>
        <select name="cheque" id="cheque">
            <option value="sim" <?php if ($row['cheque'] == 'sim') echo 'selected'?>>Sim</option>
            <option value="nao" <?php if ($row['cheque'] == 'nao') echo 'selected'?>>Não</option>
        </select>
    </div>


    <div>
        <button type="submit" value="Salvar">Salvar</button>
    </div>

</form>
</body>
</html>