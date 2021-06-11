<?php include("header.php");
    include ("php\connection\connection.php");
    $status = "I";
    if(isset($_POST['busca'])) {
      $pesquisa = "%{$_POST['busca']}%";
      $stmt = $conn->prepare("SELECT * FROM cadastros WHERE nome LIKE ? AND status != ? ");
    $stmt->bindParam(1,$pesquisa, PDO::PARAM_STR);
    $stmt->bindParam(2,$status, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();
    }elseif(!isset($_POST['busca'])){
      $pesquisa = '';
      $stmt = $conn->prepare("SELECT * FROM cadastros WHERE status != ? ");
      $stmt->bindParam(1,$status, PDO::PARAM_STR);
      $stmt->execute();
    }    
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
while ($row = $stmt->fetch()) {
        
  echo '<tr>
<th scope="row"> </th>
<td>'.$row['id'].'</td>
<td>'.$row['nome'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['endereco'].'</td>
<td>'.$row['telefone'].'</td>
<td><a href="editar.php?id='.$row['id'].'" class="btn btn-primary" >Editar</a>   <a href="php/excluir.php?id='.$row['id'].'" class="btn btn-danger">Excluir</a></td>
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