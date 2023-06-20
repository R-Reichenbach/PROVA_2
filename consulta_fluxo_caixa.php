<?php

    include('conexao.php');
    $id_caixa = $_GET['id_caixa'];
    $tipo = $_POST['tipo'];


    if($tipo == 'total_entradas'){
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada' ";
    } else if ($tipo == 'total_saida'){
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'saida' ";
    }else if($tipo == 'saldo_total') {
        $sql= "select sum(case when tipo = 'entrada' then valor else 0 end) - 
                      sum(case when tipo = 'saida' then valor else 0 end) as valor
                      from fluxo_caixa  ";
    } 

    include('conexao.php');

    $result = mysqli_query($con, $sql);


?>