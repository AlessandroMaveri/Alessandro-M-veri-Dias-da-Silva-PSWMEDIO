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
 <title>exemplo-post</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="meio">
    

<form  class="form" method="post" action="mostraaluno.php">

 <div class="main">
 <p>  <input type="text" name="cpf" placeholder="Seu cpf" id="um" value=<?php echo $_POST ['cpf']?> /> </p>
 <p>  <input type="text" name="nome" placeholder="Seu nome" id="um" value=<?php echo $_POST ['nome']?>/> </p></div>
 <div class="main">
 <p>  <input type="email" name="email" placeholder="Seu email" id="um" value=<?php echo $_POST ['email']?> /> </p>
 <p>  <select name="estado" id="est" placeholder= "estado"  value=<?php echo $_POST ['estado']?>>
        <option value="Escolher"> Estado</option>
        <option value="Minas Gerais">MG</option>
        <option value="Bahia">BA</option>
        <option value="Sergipe">SE</option>
        <option value="São Paulo">SP</option>
        </select>      
        
    </p>

 </div>
 <div class="main">
 <p>  <input type="text" name="cidade" placeholder="Sua cidade" id="dois" value=<?php echo $_POST ['cidade']?> /> </p>
 <p>  <input type="text" name="endereço" placeholder="Seu endereço" id="um" value=<?php echo $_POST ['endereço']?> /> </p>
 </div>
 <input TYPE="hidden" NAME="form_submit" VALUE="OK">
 <br><br>
 <button type="submit" class="btn" id="but">
 <b>salvar</b>
 </button>
</div>

<?php include_once("roda.php")
?>
</body>
</html>