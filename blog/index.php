<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Blog::Vinicius Carvalho</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <?php include('nav.php')?>
    </header>

<!-- Aqui fica o Slide-->

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img02.jpg" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img03.jpg" class="d-block w-100 " height="500px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
<!-- Aqui entra os cards-->

<div class="container-cards d-flex">
  <?php foreach($results as $_POST):?> 
        <div class="card " style="width: 23rem; ">
        <img src="<?=$_POST['img']?>" class="card-img-top" height="195px" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a class="title-card" href="viewPost.php?id=<?=$_POST['id']?>"><?=$_POST['title']?></a></h5>
            <p></p>
        </div>
        </div>
       <!-- <div class="card" style="width: 23rem;">
        <img src="images/card2.jpg" class="card-img-top" height="195px" alt="...">
        <div class="card-body">
            <h5 class="card-title"><a class="title-card" href="">Card title</a></h5>
            
        </div>
   
        </div>
        <div class="card" style="width: 23rem;">
        <img src="images/card3.jpg" class="card-img-top"height="195px" alt="...">
        <div class="card-body">
            <h5 class="card-title"> <a id="title-card" class="title-card" href="viewPost.php">Card title</a></h5>
        </div>
       
</div>-->
<?php endforeach; ?>
</div>

<?php include('footer.php')?>










<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- link icons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>