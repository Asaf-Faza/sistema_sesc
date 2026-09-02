<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Bem Vindo!</title>
</head>
<body>
    <main>
        <form action="login.php" method="POST">
            <label for="email">Insira seu email</label>
            <input type="email" id="email" name="email">
            <label for="senha">Insira sua senha</label>
            <input type="text" id="senha" name="senha">
            <button type="submit">Entrar</button>
        </form>
    </main>
</body>
</html>

<?php 
    session_start();
    include_once('../config/database.php');

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $sql = $conexao->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = :email");
        $sql->execute(['email' => $email]);
        $usuario = $sql->fetch();

        if($usuario &&)
}
?>