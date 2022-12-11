<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <style>
       #bu input{
                padding: 5px 20px 5px 20px;
                border: 1px solid #111;
                background: #fff;
                color: #111;
                border-radius: 10px;
                cursor: pointer;

            }
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style=>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-80">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card  text-black" style=" border-radius: 1rem; height: 550px; background: gray;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
                <p class="text-white-50 mb-5"><img src="images-adm/Login-logo.png" style="margin-top:-1cm ;" height="90px" width="90px" alt=""></p>
              <h4 class="fw-bold mb-2 text-uppercase">Painel Administrativo</h4>
             
        <form action="logar.php" method="post">
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Login</label>
                <input type="text"  name="logins" class="form-control form-control-lg" />
                
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Senha</label>
                <input type="password" id="typePasswordX" name="passwords" class="form-control form-control-lg" />
                
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!"></a></p>

              <input class="btn btn-outline-dark btn-lg px-5" style="margin-top: -1.8cm;" type="submit" value="Logar">

        </form>
           

         <a id="bu" href="/blog-git/blog/index.php"><input type="button" value="Voltar"></a> 

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>