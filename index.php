<?php include("header.php");
    include ("php\connection\connection.php");
    
 ?>
 <?php if(isset($_GET['cadastrado'])){?>
        
    <div class="container ">
        <div class="alert alert-success" role="alert">
            Cadastrado com sucesso
         </div>
<?php }elseif(isset($_GET['atualizado'])){ ?>
    <div class="container ">
        <div class="alert alert-success" role="alert">
            Atualizado com sucesso
    </div>
<?php }elseif(isset($_GET['excluido'])){?>
    <div class="container ">
        <div class="alert alert-success" role="alert">
            Excluido com sucesso
        </div>
<?php }elseif(isset($_GET['erro'])){?>
<div class="container ">
    <div class="alert alert-danger" role="alert">
        Algo deu errado
    </div>
    <?php } ?>
 
    <body>
        <div class="container inicio">
        <div class="jumbotron">
  <h1 class="display-4">Bem vindo, Visitante.</h1>
  <p class="lead">Você está no sistema de agenda, o que quer fazer: </p>
  <hr class="my-4">
 
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="cadastrar.php" role="button">Cadastrar</a>
    <a class="btn btn-primary btn-lg" href="exibir.php" role="button">Ver Cadastros</a>
  </p>
</div>
            
            
            
        </div>
        <script>
jQuery(function($){

$("#telefone").mask("(99) 9999-9999");

});
</script>

    </body>
<?php include("footer.php"); ?>
</html>