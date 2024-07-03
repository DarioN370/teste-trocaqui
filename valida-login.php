<?php

try{

    include 'conexao.php';

    $email = "teste1@gmail.com";
    $senha = "111111";


    $sql = "SELECT COUNT(email) as total FROM tb_usuario WHERE email='$email' AND BINARY senha='$senha'";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $dados = $stmt->fetchAll((PDO::FETCH_ASSOC)); //senha dando erro no fetch e fetchAll

    if($dados[0]['total'] == 0){
        // pagina de erro 
        header('Location: erro.php');
    }else{
        // pagina interna do site de sucesso
    header('Location: pagina-interna.php');
    }

    }catch(PDOException $err){
        echo "Erro".$err->getMessage();
    }
?>