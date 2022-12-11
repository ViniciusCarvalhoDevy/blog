<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="CSSADM/admin.css">
 


</head>
<body>
    <div class="container">
    <form  action="enviar.php" method="post" enctype="multipart/form-data">
      <h1>Inserir</h1>
  <div class="form-row">
   
      <span for="">Titulo</span>
      <input type="text"  name="title"  placeholder="Digite o Título" required>
   
    
      <span for="">Data</span>
      <input type="date"  name="datas"  placeholder="" required>
    
      <span for="">Descrição</span>
      <input type="text"  name="descriptions"  placeholder="" required>
  
    <span for="">Texto Descritivo</span>
   

  <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>
  <div class="document">
    <textarea id="myTextarea" name="text"></textarea>

  </div>
  
  
   
      <select name="category" id="selector">
      <option value="">Categoria</option>
      <option value="1">Peças</option>
      <option value="2">Linguagens</option>
    </select>
  
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