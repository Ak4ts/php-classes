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
    <table>
    <?php
      if(isset($_POST['num1'])){
        if(isset($_POST['num2'])){
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          for($i=1; $i<=$num1; $i++){
            echo "<tr>";
            for($j=1; $j<=$num2; $j++){
              echo "<td>".$i*$j."</td>";
            } 
            echo "</tr>";
          }
        }
      } else if(isset($_GET['num1'])){
          if(isset($_GET['num2'])){
          $num1 = $_GET['num1'];
          $num2 = $_GET['num2'];
          for($i=1; $i<=$num1; $i++){
            echo "<tr>";
            for($j=1; $j<=$num2; $j++){
              echo "<td>".$i*$j."</td>";
            } 
            echo "</tr>";
          }
        }
      } else {
        echo "números não fornecidos!";
      }
    ?>
    <table>
    <form action="index.php" method="POST">
      <input type="number" placeholder="Digite o número!" name="num1">
      <input type="number" placeholder="Digite o número!" name="num2">
      <input type="submit" value="Enviar!">
    </form>
  </body>
</html>