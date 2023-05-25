<?php

    // Variáveis de conexão
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banco_teste";

    // Conexão 
    $conn = new mysqli($servername,$username, $password,$dbname);

    // Pegando inputs 
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    // Teste de login
    $sql= "SELECT * FROM  acesso WHERE email = '$email' AND senha = '$pass' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // O login e senha estão corretos, o usuário está cadastrado no banco de dados
        echo "Login bem-sucedido!";
    } else {
        // O login e senha estão incorretos, o usuário não está cadastrado no banco de dados
        echo "Login ou senha inválidos.";
    }

    http_response_code(200);

    $conn ->close();
//asdasdas
?>
