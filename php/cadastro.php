<?php 
    include ("connection\connection.php");
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    

    $sql = "INSERT INTO `cadastros`(`nome`, `email`, `endereco`, `telefone`)
    VALUES ('$nome','$email', '$endereco','$telefone')";

   if(mysqli_query($conn, $sql)) {
    header('location:../index.php?cadastrado');
   }
   
   

?>