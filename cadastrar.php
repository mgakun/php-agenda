<?php include("header.php");
    include ("php\connection\connection.php")
 ?>
<?php if(isset($_GET['success']))
    {
        ?>
        <!-- $Message = "Some error occured please try after some time";
        echo $Message; -->
        <div class="container ">
        <div class="alert alert-success" role="alert">
  Cadastrado com sucesso
</div>
            <?php } ?>

    <body>
        <div class="container">
            
                <form action="php\cadastro.php" method="post">
                <input type="hidden" id="id" name="id" >
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome </label>
                        <input type="text" class="form-control x" id="nome" placeholder="Nome Completo" name="nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail </label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>    
                    </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="endereco">Endereço </label>
                            <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefone">Telefone </label>
                            <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="telefone" required>
                        </div>
                    </div>
                    
                    <div class="row enviar">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    
                    
            </form>
            
        </div>
        <script>
jQuery(function($){

$("#telefone").mask("(99) 9999-9999");

});
</script>
    </body>
<?php include("footer.php"); ?>
</html>