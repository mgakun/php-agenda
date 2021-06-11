<?php 
    include ("connection\connection.php");
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    
    $stmt = $conn->prepare("INSERT INTO `cadastros`(`nome`, `email`, `endereco`, `telefone`)VALUES 
    (?, ?, ?, ?)");
    $stmt->bindParam(1, $nome,PDO::PARAM_STR );
    $stmt->bindParam(2, $email,PDO::PARAM_STR );
    $stmt->bindParam(3, $endereco,PDO::PARAM_STR );
    $stmt->bindParam(4, $telefone,PDO::PARAM_STR );
    $stmt->execute();

        if($stmt->rowCount() > 0) {
            header('location:../index.php?cadastrado');
        }else{
            header('location:../index.php?erro');
        }


//     
   
   

?>