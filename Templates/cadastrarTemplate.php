<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro de Clientes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/clientes.css" />
    </head>
    <body>
        <h1>Cadastro de Cliente</h1>
        <div>
            <form>
                <fieldset>
                    <legend>Novo Cliente</legend>
                    <label>
                        Nome:
                        <input type="text" name="nome"/>
                    </label>
                    <br>
                    <br>
                    <label>
                        E-mail (Opcional):
                        <input type="text" name="email"/>
                    </label>
                    <br>
                    <br>
                    <form method="post" action="../Upload/upload.php" enctype="multipart/form-data">
                        <label>Foto (Opcional):</label>
                        <input type="file" name="arquivo" />
                    </form>
                    <br>
                    <br>
                    <label>
                        Telefone (Opcional):
                        <input type="text" name="telefone"/>
                    </label>
                    <br>
                    <br>

                    <input type="submit" value="Cadastrar"/>
                </fieldset>
            </form>
        </div>
    </body>
</html>