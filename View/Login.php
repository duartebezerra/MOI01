<?php

$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
WHERE email='$email'
AND cpf='$cpf'";

$result = $conn->query($sql);

if($result->num_rows > 0){

    $usuario = $result->fetch_assoc();

    if(password_verify($senha, $usuario['senha'])){

        session_start();

        $_SESSION['usuario'] =
        $usuario['nome_completo'];

        header("Location: painel.php");

    }else{
        echo "Senha incorreta!";
    }

}else{
    echo "Usuário não encontrado!";
}

?>