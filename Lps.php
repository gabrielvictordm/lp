<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $Cargo = $_POST["cargo"];
    $faixa_de_colaborador = $_POST["faixa_de_colaborador"];
    
    // Conecta ao banco de dados (substitua pelos dados do seu banco)
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "nome_do_banco";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Insere os dados no banco
    $sql = "INSERT INTO formulario (nome, email, telefone, cargo, faixa_de_colaborado) VALUES ('$nome', '$email', '$telefone', '$cargo', '$faixa_de_colaborador')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar os dados: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>

