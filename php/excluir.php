<?php 
    include ("connection\connection.php");
    
    $id = $_GET['id'];
    $status = "I";

    $stmt = $conn->prepare("UPDATE `cadastros` SET `status` = ? WHERE id = ?");
    $stmt->bindParam(1, $status,PDO::PARAM_STR );
    $stmt->bindParam(2, $id,PDO::PARAM_INT );
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        header('location:../index.php?excluido');
    }else{
        header('location:../index.php?erro');
    }
    

?>