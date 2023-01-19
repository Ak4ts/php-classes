<!DOCTYPE html>
<html>
<head>
  <title>LP2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-teal">
<h1>Site bem bonito</h1>
</div>
<form action="index.php" method="POST" enctype="multipart/form-data"><br>

<input type="file" name="arq1" /><br><br>

<input type="submit" name="btnEnvio" value="Enviar" />

</form>
<?php

  if( isset($_POST['btnEnvio']) ){
    
    $name = $_FILES['arq1']['name'];
    $fileSize = $_FILES['arq1']['size'];
    $tmpName = $_FILES['arq1']['tmp_name'];
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $allowedExtensions = ['gif', 'png', 'jpeg', 'jpg', "jfif", "gif"];
    
    if(in_array($ext, $allowedExtensions)){
      if(!file_exists("./uploads/".$name)){
          move_uploaded_file($tmpName, "./uploads/".$name);
          $myfile = fopen("logs.txt", "r+") or die("Unable to open file!");
          $past = fread($myfile, filesize("logs.txt"));
          echo $past;
          $today = date("d/m/Y H:i:s");
          $hour = date_default_timezone_set('America/Sao_Paulo');
          $ip = $_SERVER['REMOTE_ADDR'];
          $txt = "$today $hour $ip - ./uploads/$name\n";
          fwrite($myfile, "$txt");
          fclose($myfile);
      }else{
        echo "Arquivo já existente!!";
      }
    }else{
      echo "Extensão incompativel!!";
    }
    
  }
  if (isset($_GET['delete'])) {
    unlink('uploads/'.$_GET['delete']);
  }
  $files = scandir("./uploads/");
  
  $onlyImages = ['gif', 'png', 'jpeg', 'jpg', "jfif", "gif"];
  
  for($i = 2; $i <sizeof($files); $i++){
    
    $ext = pathinfo($files[$i], PATHINFO_EXTENSION);

    echo "<div class='w3-third'>
    <div class='w3-card'>
    <img src='uploads/$files[$i]' style='width:100%'>
    <div class='w3-container'>
    <h4>$files[$i]</h4>
    <a href='index.php?delete=$files[$i]'> Apagar </a>
    </div>
    </div>
    </div>";
    
  }

?>

</body>

</html>