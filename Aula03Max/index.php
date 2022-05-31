<!DOCTYPE html>
<html>
  <head>
    <title>Palíndromos</title>
    <link href="index.css" rel="stylesheet">
  </head>
  <body>
    <header> 

    </header>
    <h1 style="text-align:center"> Aulas de PHP</h1>
    <?php

      if(isset($_POST['palindromo'])) $palavra = $_POST['palindromo'];
      
      if(isset($palavra)){
        if($palavra == strrev($palavra)){
          $isset = "";
        }
        echo isset($isset) ? "<h1>É Palíndromo!</h1>" : "<h1>Não é Palíndromo!</h1>";
      }
    ?>
    <form action="index.php" method="POST">
      <input type="text" placeholder="Digite a palavra!" name="palindromo">
      <input type="submit" value="Enviar!">
    </form>
  </body>
</html>