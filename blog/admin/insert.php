<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
 


</head>
<body>
    <div class="container">
    <form  action="enviar.php" method="post">
      <h1>Inserir</h1>
  <div class="form-row">
   
      <span for="">Titulo</span>
      <input type="text"  name="title"  placeholder="Digite o Título" required>
   
    
      <span for="">Data</span>
      <input type="date"  name="datas"  placeholder="" required>
    
  
  
    <span for="">Texto Descritivo</span>
    <input id="description" type="text" name="descriptions"  placeholder="Descrição" required>
  
  
  </div>
  <div class="min-footer">
    <span for="">Envie uma imagem</span>
    <input type="file" name="img" ><br>
  </div>
    
  
    <br>
    
  <input type="submit" id="buttom" value="Publicar"></input>

</div>
</form>
</body>
</html>