<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 include_once ("topo.php");
 if( !empty($_POST['form_submit']) ) 
 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylemostra.css">
    
</head>
<body>
<?php
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $endereço = $_POST['endereço'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
  


    ?>
    <div class="cima">
    <table>
 <tr><th>NOME</th> <td> <?php echo "$nome" ?> </td></tr>
 <tr><th>CPF</th> <td> <?php echo "$cpf" ?></td></tr>
 <tr><th>EMAIL</th> <td><?php echo "$email" ?></td></tr>
 <tr><th>ENDEREÇO</th> <td><?php echo "$endereço" ?></td></tr>
 <tr><th>CIDADE</th> <td><?php echo "$cidade" ?></td></tr>
 <tr><th>ESTADO</th> <td><?php echo "$estado" ?></td></tr>
 
    </table>

    </div>


    <div class="baixo">
        <form action="edit.php" method="post">
    
    <input type="hidden" name="nome" value=<?php echo $_POST ['nome']?>>
    <input type="hidden" name="cpf" value=<?php echo $_POST ['cpf']?>>
    <input type="hidden" name="email" value=<?php echo $_POST ['email']?>>
    <input type="hidden" name="endereço" value=<?php echo $_POST ['endereço']?>>
    <input type="hidden" name="cidade" value=<?php echo $_POST ['cidade']?>>
    <input type="hidden" name="estado" value=<?php echo $_POST ['estado']?>>
 <input type="submit" class="button button5" name="form_submit" value="Editar" >
</form>
</div>

    <?php include_once("roda.php")
    
?>
</body>
</html>