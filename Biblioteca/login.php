<?php

include("conexao.php");
$conn = getConnetion();

$user = $_POST["usuario"];
$pass = $_POST["senha"];

$sql = "SELECT * FROM user WHERE usuario = '$user' AND senha = '$pass'";

$stmt = $conn->query($sql) or die($conn->errorCode());

$row = $stmt->fetchObject();

$qtd = $stmt->rowCount();

if ($qtd > 0) {
    $userData = array(
        'usuario' => $user,
        'nome' => $row->nome
    );
    print "<script>location.href='./View/principal.html';</script>";
    exit();
}

print "<script>alert('Usuário ou senha incorretos');</script>";
print "<script>location.href='./View/index.html';</script>";

