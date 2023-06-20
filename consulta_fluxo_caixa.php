<?php

    include('conexao.php');
    $tipo= $_POST['tipo'];
    $sql = "SELECT id_caixa from fluxo_caixa";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

   

    if($tipo == 'entrada'){
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada' ";
    } else if ($tipo == 'saida'){
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'saida' ";
    }else if($tipo == 'saldo') {
        $sql= "select sum(case when tipo = 'entrada' then valor else 0 end) - 
                      sum(case when tipo = 'saida' then valor else 0 end) as valor
                      from fluxo_caixa  ";
    } 


?>