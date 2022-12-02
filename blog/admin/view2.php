<?php
require 'config.php';

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


include('header.php');
?>


           </div> 
             
    </div> 
<div class="d-block" style="padding-right: 0cm;">
    <h1 class="">Meus Posts</h1>
        <div class="container">
          
           
            <table class="table" style="margin: 0 auto;" id="contacts-table" >
                
                <thead>
                    
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>

                </thead>
               
                
                <tbody >
                        <?php foreach($results as $_POST): ?>
                    <tr >
                        <td scope="row"><?php echo $_POST['id'];?></td>
                        <td scope="row"><?php echo $_POST['title'];?></td>
                        <td scope="row"><?php echo $_POST['descriptions'];?></td>
                        <td class="actions">
                            <a class="view-edit" style="text-decoration: none; " href="viewsBlog.php?id=<?=$_POST["id"]?>">
                            <ion-icon name="eye"></ion-icon>
                            </a>
                            <a style="text-decoration: none;" class="view-edit" href="editar.php?id=<?=$_POST["id"]?>">
                            <ion-icon name="create"></ion-icon>
                            </a>
                            <a style="text-decoration: none;  "id="delet" href="delete.php?id=<?=$_POST["id"]?>">
                            <ion-icon name="close-circle"></ion-icon>
                            </a>
                        </td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</div>
       
</div>
  
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>