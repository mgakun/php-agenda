<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];

    $sql = "INSERT INTO `cadastros`(`id`, `nome`, `email`, `endereco`, `telefone`, `data_nasc`)
    VALUES ('$nome','$email', '$endereco','$telefone','$data_nasc')";

    mysqli_query($conn, $sql);

?>