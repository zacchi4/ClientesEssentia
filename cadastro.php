<?php
session_start();

include "Banco/banco.php";

if (isset($_GET['nome']) && $_GET['nome'] != '') {

    $cliente = array();

    $cliente['nome'] = $_GET['nome'];

    if (isset($_GET['email'])) {
        $cliente['email'] = $_GET['email'];
    } else {
        $cliente['email'] = '';
    }

    if (isset($_GET['arquivo'])) {
        $cliente['foto'] = $_GET['arquivo'];
    } else {
        $cliente['foto'] = '';
    }

    if (isset($_GET['telefone'])) {
        $cliente['telefone'] = $_GET['telefone'];
    } else {
        $cliente['telefone'] = '';
    }

    if (isset($_FILES['arquivo']) != '') {

        $ext = $_FILES['arquivo']; //Pegando extensão do arquivo
        $dir = './Uploads'; //Diretório para uploads

        move_uploaded_file($_FILES['arquivo'], $dir); //Fazer upload do arquivo
    }

    gravar_cliente($cliente);
}

include "Templates/cadastrarTemplate.php";
?>

<br>
<br>
<br>
<br>
<div>
    <a href="Index.php"><input type="button" name="voltar" value="Voltar" /></a>
</div> 


















