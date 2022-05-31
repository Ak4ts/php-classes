<?php
$path = "./";
$diretorio = dir($path);
echo "<script>var folders = []</script>";
while($arquivo = $diretorio -> read()){
  echo "<script> folders.push('".$arquivo."')
    </script>
  ";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Aulas de PHP</title>
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
    <header> 
      <script>
        var foldersMapped = "<ul>"
        folders.map((folder) => {
          if (folder.toString() != ".") {
            if (folder.toString() != "..") {
              if (folder.toString() != ".git") {
                if (folder.toString() != "README.md") {
                  if (folder.toString() != "index.php") {
                    if (folder.toString() != "css") {
                      return foldersMapped =
                        foldersMapped +
                        "<li><a href='./" +
                        folder +
                        "'>" +
                        folder +
                        "</a> </li>";
                    }
                  }
                }
              }
            }
          }
        })
        foldersMapped += "</ul>"
        document.write(foldersMapped)
      </script>
    </header>
    <h1 style="text-align:center"> Aulas de PHP</h1>
    <script type="text/javascript" src="/scripts/index.js"></script>
  </body>
</html>