<?php 
    include ("connection\connection.php");
    
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    

    $stmt = $conn->prepare("UPDATE `cadastros` SET `nome` = ?, `email` = ?, `endereco` = ?, `telefone` = ? WHERE id = ? ");
    $stmt->bindParam(1, $nome,PDO::PARAM_STR );
    $stmt->bindParam(2, $email,PDO::PARAM_STR );
    $stmt->bindParam(3, $endereco,PDO::PARAM_STR );
    $stmt->bindParam(4, $telefone,PDO::PARAM_STR );
    $stmt->bindParam(5, $id,PDO::PARAM_INT );
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        header('location:../index.php?atualizado');
    }else{
            header('location:../index.php?erro');
        }
    
    

?>