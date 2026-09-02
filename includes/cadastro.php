<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Cadastre-se</title>
</head>
<body>
    <main>
        <form action="cadastro.php" method="POST">
            <label for="nome">Insira seu nome</label>
            <input type="text" id="nome" name="nome">
            <label for="email">Insira seu email</label>
            <input type="email" id="email" name="email">
            <label for="senha">Crie sua senha</label>
            <input type="text" id="senha" name="senha">
            <button type="submit">cadastrar</button>
        </form>
    </main>
</body>
</html>

<?php
    session_start();
    require_once("../config/database.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        if (empty($nome) || empty($email) || empty($senha)) {
            die("Preencha todos os campos");
        }

        $checkEmail = $conexao->prepare("SELECT id FROM usuarios WHERE email = :email");
        $checkEmail->execute(['email' => $email]);

        if ($checkEmail->fetch()) {
            die("Esse email já foi registrado");
        }

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $conexao->prepare($sql);

        try {
            $stmt->execute([
                'nome' => $nome,
                'email' => $email,
                'senha' => $senha
            ]);
        
            echo "Registration successful! You can now <a href='login.php'>Login</a>.";
        } catch (PDOException $e) {
            die("Um erro inesperado ocorreu");
            echo($e);
        }
    }