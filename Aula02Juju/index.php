<!DOCTYPE html>
<html>
  <head>
    <title>Aulas de PHP</title>
    <link href="./index.css" rel="stylesheet">
  </head>
  <body>
    <header style="padding-top: 20px"> 
      <h1 style="text-align:center; background-color: rgb(22, 22, 22);"> Exercícios da Aula</h1>
      
    </header>
    <h1 style="text-align:center; margin-top: 30px;"> Exercício 1</h1>
    <ul>
      <?php
        for($i = 100; $i >= 50; $i--){
          echo "<li> $i </li>";
        }
      ?>
    </ul>

    <h1 style="text-align:center; margin-top: 130px;"> Exercício 2</h1>
    <ul>
      <?php
        $rand = [
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
          rand(-100, 100), 
        ];
        $positive = 0;
        $negative = 0;

        foreach($rand as $num){
          if($num > 0){
            $positive += $num;
          } else {
            $negative += 1;
          }
        }
        echo "
          <li><p> Soma dos postivios: $positive</li> 
          <li>Números negativos: $negative</li>
        ";
      ?>
    </ul>

    <h1 style="text-align:center; margin-top: 130px;"> Exercício 3</h1>
    <?php
      $phrase = "Instituto Federal do Sul de Minas";
      echo "<ul><li> ".strtoupper($phrase)."</li></ul>";
    ?>

    <h1 style="text-align:center; margin-top: 130px;"> Exercício 4</h1>
    <?php
      $phrase2 = "América Latina pode perder 2,4 milhões de empregos";

      echo "<ul><li>Tamanho da frase:".strlen($phrase2)."</li></ul>";
    ?>

    <h1 style="text-align:center; margin-top: 130px;"> Exercício 5</h1>
    <?php
      $luiz = "Luiz";
      echo "<ul><li>".strrev($luiz)."</li></ul>";
    ?>
  </body>
</html>