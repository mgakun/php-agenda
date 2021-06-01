<?php 
    include ("connection\connection.php");
    
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    

    $sql = 
    "UPDATE `cadastros` SET `nome` = '$nome', `email` = '$email', `endereco` = '$endereco', `telefone` = '$telefone' WHERE id = '$id' ";

    // echo  "UPDATE `cadastros` SET `nome` = '$nome', `email` = '$email', `endereco` = '$endereco', `telefone` = '$telefone', `data_nasc` = '$data_nasc' WHERE `id` = '$id'";exit;

   if(mysqli_query($conn, $sql)) {
    header('location:../index.php?atualizado');
   }
    

?>