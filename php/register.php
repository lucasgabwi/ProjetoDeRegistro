<?php

    $host = "localhost";
    $db_user = "root";
    $db_pwd = "";
    $db_name = "PaginaDeRegistro";

    $conn = new mysqli($host, $db_user, $db_pwd, $db_name);

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['pwd'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if($conn->query($sql) === TRUE){
        echo "Cadastro efetuado com sucesso.";
    }else{
        echo "Verifique seus dados e tente novamente.";
    }

    $conn->close();

?>