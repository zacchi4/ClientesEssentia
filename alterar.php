<?php
session_start();

include "Banco/banco.php";

$codCli = 0;
$nomCli = '';

if (isset($_GET['nome']) == 0) {

    if (isset($_GET['cod']) > 0) {
        $codCli = intval($_GET['cod']);

        if ($codCli > 0) {
            $clientes = localizar_cliente($codCli);

            foreach ($clientes as $cliente) {
                $nomCli = $cliente['NomCli'];
                $emlCli = $cliente['EmlCli'];
                $telCli = $cliente['TelCli'];
                $locFot = $cliente['LocFot'];
            }
        } else {
            echo "<script>alert('Cliente não encontrado ou código não digitado !');</script>";
        }
    }
} else {

    if (isset($_GET['nome']) && $_GET['nome'] != '') {

        $cliente = array();

        $cliente['codigo'] = $_GET['codigo'];
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

        updateCliente($cliente);
    }
}

include "Templates/alterarTemplate.php";
?>

<br>
<br>
<br>
<div>
    <a href="Index.php"><input type="button" name="voltar" value="Voltar" /></a>
</div> 
