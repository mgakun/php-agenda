<?php include("header.php");
    include ("php\connection\connection.php");

    
    $id = $_GET['id'];

    $sql = "SELECT * FROM cadastros WHERE id = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
    $url = "php\update.php";
    
 ?>
 
    <body>
        <div class="container">
            <div class="row">
                <form action="<?php echo $url.'?id='.$id ?>" method="post">
                <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="nome">Nome </label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" value="<?php echo $linha['nome']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail </label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="<?php echo $linha['email']; ?>">    
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço </label>
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" value="<?php echo $linha['endereco']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone </label>
                        <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="telefone" value="<?php echo $linha['telefone']; ?>">
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="exibir.php" class="btn btn-primary">Editar</a>
            </form>
            </div>
        </div>
    </body>
<?php include("footer.php"); ?>
</html>