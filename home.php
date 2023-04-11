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
    <link rel="stylesheet" href="home.css">
 </head>
 <body>
    <div class="container">
      <form action="cadastroaluno.php" method="post">
        <input type="submit" class="button button5" value="Cadastrar-se">
      </form>
      <form action="mostraaluno.php" method="post">
        <input type="submit"  class="button button5" value="Já tenho cadastro">
      </form>
    </div>
 <?php include_once("roda.php")
?>
 </body>
 </html>
 