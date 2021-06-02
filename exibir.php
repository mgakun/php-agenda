<?php include("header.php");
    include ("php\connection\connection.php");

    if(isset($_POST['busca'])) {
      $pesquisa = $_POST['busca'];
    }else{
      $pesquisa = '';
      $sql = "SELECT * FROM cadastros status != 'I' ";
    }

    $sql = "SELECT * FROM cadastros WHERE nome LIKE '%$pesquisa%' AND status != 'I' ";

    

    

    $dados = mysqli_query($conn, $sql);
    
    ?>
 
    <body>
        <div class="container">
        
        <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      
      <th scope="col">Painel</th>
    </tr>
  </thead>
  <tbody>
<?php 
 while($linhas = mysqli_fetch_assoc($dados)){
    $id = $linhas['id'];
    $nome = $linhas['nome'];
    $email = $linhas['email'];
    $endereco = $linhas['endereco'];
    $telefone = $linhas['telefone'];
  



    
   echo '<tr>
  <th scope="row"> </th>
  <td>'.$id.'</td>
  <td>'.$nome.'</td>
  <td>'.$email.'</td>
  <td>'.$endereco.'</td>
  <td>'.$telefone.'</td>

  <td><a href="editar.php?id='.$id.'" class="btn btn-primary" >Editar</a>   <a href="php/excluir.php?id='.$id.'" class="btn btn-danger">Excluir</a></td>
  
  
</tr>';
 }
?>
   
  </tbody>
</table>
            </div>
        </div>
    </body>
<?php include("footer.php"); ?>
</html>