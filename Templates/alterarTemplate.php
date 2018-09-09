<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alterar Cliente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/clientes.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <h1>Alterar Cliente</h1>
        <div>
            <form>
                <fieldset>
                    <legend>Entre com o código do cliente</legend>
                    <label>
                        Codigo:
                        <input type="text" name="cod"/>
                    </label>
                    <br>
                    <input type="submit" value="localizar"/>
                </fieldset>
            </form>
        </div>
        <?php if (strlen($nomCli) > 3) { ?>
            <?php $caminho_imagem = "./Uploads/" . $locFot; ?>   
            <div>
                <form>
                    <fieldset>
                        <label>
                            Código :
                            <input readonly="true" type="text" name="codigo" value="<?php echo $_GET['cod']; ?>"/>
                        </label>
                        <br>
                        <br>
                        <label>                   
                            Nome:
                            <input class="teste" type="text" name="nome" widht="100" value="<?php echo $nomCli; ?>"/> 

                            <?php if (strlen($locFot) > 0) { ?>
                                <fieldset>
                                    <img src = '<?php echo $caminho_imagem; ?>' alt = 'Foto de Exibição' width = "60" height = "75" />
                                </fieldset>
                            <?php } ?>
                        </label>
                        <br>
                        <br>
                        <label>
                            E-mail (Opcional):
                            <input type="text" name="email" value="<?php echo $emlCli ?>"/>
                        </label>
                        <br>
                        <br>
                        <form method="post" enctype="multipart/form-data">
                            <label>Foto (Opcional):</label>
                            <input type="file" name="arquivo" />
                        </form>

                        <br>
                        <br>
                        <label>
                            Telefone (Opcional):
                            <input type="text" name="telefone" value="<?php echo $telCli; ?>"/>
                        </label>
                        <br>
                        <br>
                        <input type="submit" value="Alterar"/>
                    </fieldset>
                </form>
            </div>
        <?php } ?>
    </body>
</html>