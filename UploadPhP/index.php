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
		
		echo $_FILES['arq1']['name'];
		$name = $_FILES['arq1']['name'];
		echo "<br><br>";
		
		echo $_FILES['arq1']['size'];
		$fileSize = $_FILES['arq1']['size'];
		echo "<br><br>";
		
		echo $_FILES['arq1']['tmp_name'];	
		$tmpName = $_FILES['arq1']['tmp_name'];
		echo "<br><br>";
		
		$ext = pathinfo($name, PATHINFO_EXTENSION);
		echo "<br>";
		
		
		$allowedExtensions = ['gif', 'pdf', 'png', 'jpeg', 'jpg', "jfif"];
		
		
		if(in_array($ext, $allowedExtensions)){
			
			if(!file_exists("./Uploads/".$name)){
					
					move_uploaded_file($tmpName, "./Uploads/".$name);
					
			}else{
			echo "Arquivo já existente!!";
			}
			
		}else{
			echo "Extensão incompativel!!";
		}
		
	}
  if (isset($_GET['delete'])) {
    unlink('Uploads/'.$_GET['delete']);
  }
	$files = scandir("./Uploads/");
	
	$onlyImages = ['gif', 'png', 'jpeg', 'jpg', "jfif", "gif"];
	
	for($i = 2; $i <sizeof($files); $i++){
		
		$ext = pathinfo($files[$i], PATHINFO_EXTENSION);

		echo "<div class='w3-third'>
		<div class='w3-card'>
		<img src='Uploads/$files[$i]' style='width:100%'>
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