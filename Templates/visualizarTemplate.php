<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Visualizar / Excluir</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="CSS/clientes.css" />
    </head>
    <body>

        <h1>Visualizar / Excluir</h1>

        <div>
            <table> 
                <tr> 
                    <th>Excluir</th>
                    <th>Codigo</th> 
                    <th>Nome</th> 
                    <th>E-mail</th> 
                    <th>Telefone</th> 
                    <th>Foto</th> 
                </tr>      
                
                <?php foreach ($clientes as $cliente) : ?> 
                    <tr> 
                        <td><input type="checkbox" name="excluir" value="<?php $cliente['CodCli'] ?>" /></td>
                        <td><?php echo $cliente['CodCli']; ?></td> 
                        <td><?php echo $cliente['NomCli']; ?></td> 
                        <td><?php echo $cliente['EmlCli']; ?></td> 
                        <td><?php echo $cliente['TelCli']; ?></td> 
                        <td><?php echo $cliente['LocFot']; ?></td> 
                    </tr> 
                <?php endforeach; ?> </table>
        </table>

        <br>
        <br>
        <input type="submit" value="Excluir"/>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
        <a href="Index.php"><input type="button" name="voltar" value="Voltar" /></a>
    </div>    
</body>
</html>