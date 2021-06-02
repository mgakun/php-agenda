<?php 
    include ("connection\connection.php");
    
    $id = $_GET['id'];
    

    $sql = 
    "UPDATE `cadastros` SET `status` = 'I' WHERE id = '$id'";

   if(mysqli_query($conn, $sql)) {
    header('location:../index.php?excluido');
   }
    

?>