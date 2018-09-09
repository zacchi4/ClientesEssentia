<?php

function conexao() {
    $bdServidor = 'localhost';
    $bdUsuario = 'root';
    $bdSenha = 'root';
    $bdBanco = 'clientedb';

    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

    if (mysqli_connect_errno($conexao)) {
        echo "Problemas para conectar no banco. Verifique os dados!";
        die();
    }
    
    return $conexao;
}

function excluir($cod){
    
    $conn = conexao();
    $sql = "DELETE FROM T001CLI WHERE CODCLI=$cod";
    
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}

function buscar_clientes() {

    $conn = conexao();
    
    $sqlBusca = 'SELECT * FROM clientedb.t001cli';
    $resultado = mysqli_query($conn, $sqlBusca);
    $clientes = array();

    while ($cliente = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $cliente;
    }
    
    mysqli_close($conn);
    return $clientes;
}

function localizar_cliente($codCli) {

    $conn = conexao();

    $sqlBusca = "SELECT * FROM clientedb.t001cli Where CodCli = $codCli";
    $resultado = mysqli_query($conn, $sqlBusca);
    $clientes = array();

    while ($cliente = mysqli_fetch_assoc($resultado)) {
        $clientes[] = $cliente;
    }

    mysqli_close($conn);
    return $clientes;
}

function updateCliente($cliente){
    $conn = conexao();
    
    $sqlUpdate = "UPDATE T001CLI"
            . "      SET NOMCLI='{$cliente['nome']}',"
            . "          EMLCLI='{$cliente['email']}',"
            . "          TELCLI='{$cliente['telefone']}',"
            . "          LOCFOT='{$cliente['foto']}'"
            . "    WHERE CODCLI={$cliente['codigo']};";
            
    mysqli_query($conn, $sqlUpdate);

    mysqli_close($conn);

    echo "<script>alert('Cliente Alterado com Sucesso!');</script>";
}

function gravar_cliente($cliente) {

    $conn = conexao();

    $sqlGravar = "INSERT INTO clientedb.t001cli 
                        (NomCli, EmlCli, LocFot, TelCli) 
                      VALUES ( 
                          '{$cliente['nome']}', 
                          '{$cliente['email']}', 
                          '{$cliente['foto']}',
                          '{$cliente['telefone']}' )";

    mysqli_query($conn, $sqlGravar);

    mysqli_close($conn);

    echo "<script>alert('Cliente Cadastrado com Sucesso!');</script>";
}
