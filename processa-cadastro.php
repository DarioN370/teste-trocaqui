<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // CONEXAO COM BANCO DE DADOS padrao
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db_trocaqui";

    $conn = new mysqli($servername,$username,$password,$db_name);

    if ($conn->connect_error){
        die("Erro na conexão com o banco e dados:" . $conn->connect_error);
    }

    // captura os dados do formulário e atribui os valores as suas respectivas variaveis 
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // sql para inserir os dados coletados nos inputs, ele vai inserir nas variaveis, entao quando for fazer a alteração ou exclusão, vai alterar ou excluir a variavel do respectivo ID
    $sql = "INSERT INTO tb_usuario (email, nome, senha) VALUES ('$email', '$nome', '$senha')";

    if($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar:" . $conn->error;

    
    } 
    $conn->close();
}
?>

<a href="index.php">Voltar</a>


?>