<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" width="70px" height="70px" alt="" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/index.php">Admin</a>
        </li>
        <li class="nav-item">
	          <a class="nav-link" href="category.php?cat=Cat-1&id=1">Categoria 1</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="category.php?cat=Cat-2&id=2">Categoria 2</a>
	        </li>

      </ul>
      <form method="POST" action="buscar.php" class="d-flex" role="search">
        <input class="form-control me-2" name="buscar" type="search" placeholder="Buscar" aria-label="Buscar">
        <input class="btn btn-outline-dark" type="submit" value="Buscar">
      </form>
    </div>
  </div>
</nav>