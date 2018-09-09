<?php

    session_start();

    include "Banco/banco.php";

    if(isset($_GET['cod']) && $_GET['cod'] != ''){
        excluir($_GET['cod']);
    }
    
    $clientes = buscar_clientes();

    include "Templates/visualizarTemplate.php";

?>