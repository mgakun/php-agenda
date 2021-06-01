<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/theme.js"></script>
    
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    
    <title>Agenda de Contatos PHP</title>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Agenda PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrar.php">Cadastrar</a>
        </li>
       
      </ul>
    <form form action="exibir.php" class="form-inline busca" method="post" >
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="busca">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
</div>
</head>