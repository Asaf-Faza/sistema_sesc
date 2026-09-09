<?php
session_start();
require_once("../config/database.php");



$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "../src/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $nome = trim($_POST['nome'] ?? '');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = $_POST['senha'] ?? '';
    
    // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5 * 1024 * 1024) {
  echo "<p class='font-semibold'>
        Desculpe, aceitamos imagens com no máximo 5 MB.
    </p><br>";

  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<p class='font-semibold'>Desculpe, aceitamos apenas imagens com formato PNG, JPEG ou JPG.</p><br/>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<p class='font-semibold'>Desculpe, ocorreu um erro inesperado e sua imagem não foi enviada</p><br/>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "<p class='font-semibold'>O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviado com sucesso!</p><br/>";
    } else {
      echo "<p class='font-semibold'>Desculpe, ocorreu um erro inesperado e sua imagem não foi enviada</p><br/>";
    }
}

    if ($nome === '' || $email === false || $email === null || $senha === '') {
        $erro = 'Preencha todos os campos corretamente.';
    } else {
        $checkEmail = $conexao->prepare(
            "SELECT id FROM usuarios WHERE email = :email"
        );
        $checkEmail->execute(['email' => $email]);

        if ($checkEmail->fetch()) {
            $erro = 'Esse email já foi registrado.';
        } else {
            try {
                $stmt = $conexao->prepare(
                    "INSERT INTO usuarios (nome, email, senha, img)
                     VALUES (:nome, :email, :senha, :nome_arquivo)"
                );

                $stmt->execute([
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => password_hash($senha, PASSWORD_DEFAULT),
                    'nome_arquivo' => $_FILES["fileToUpload"]["name"]
                ]);

                $sucesso = 'Cadastro realizado com sucesso.';
            } catch (PDOException $e) {
                $erro = 'Um erro inesperado ocorreu.' . $e;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Cadastre-se</title>
</head>
<body>
    <main class=" h-screen bg-[url(../src/img/emfrentepraia.jpg)]">
        <div class="backdrop-blur-xs backdrop-grayscale-50 h-full w-full bg-none flex justify-center items-center">
            <form action="cadastro.php" method="POST" enctype="multipart/form-data" class="bg-slate-700 flex-col rounded-2xl h-2/3 flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                <div class="flex-col text-start relative select-none font-extrabold leading-2 align-middle items-center">
                    <p class="text-yellow-400 italic text-[23px] leading-0">ENSINO MÉDIO</p>
                    <p class="text-white text-4xl leading-12">INTEGRADO</p>
                    <p class="text-transparent stroke absolute top-3.5 text-[45px] opacity-20">INTEGRADO</p>
                    <p class="text-yellow-400 italic text-[16.5px] leading-0">AO TÉCNICO SESC SENAC</p>
                </div>
                <div class="flex flex-col">
                    <label for="nome" class="my-2 drop-shadow-[5px_5px_3px_rgba(0,0,0,.7)]">Insira seu nome</label>
                    <input type="text" id="nome" name="nome" class="px-2  text-black border-3 rounded border-amber-400 h-12 bg-white drop-shadow-[5px_5px_7px_rgba(0,0,0,.7)]">
                </div>
                <div class="flex flex-col">
                    <label for="email" class="my-2 drop-shadow-[5px_5px_3px_rgba(0,0,0,.7)]">Insira seu email</label>
                    <input type="email" id="email" name="email" class="px-2  text-black border-3 rounded border-amber-400 h-12 bg-white drop-shadow-[5px_5px_7px_rgba(0,0,0,.7)]">
                </div>
                <div class="flex flex-col">
                    <label for="senha" class="my-2 drop-shadow-[5px_5px_3px_rgba(0,0,0,.7)]">Insira sua senha</label>
                    <input type="password" id="senha" name="senha" class="px-2  text-black border-3 rounded border-amber-400 h-12 bg-white drop-shadow-[5px_5px_7px_rgba(0,0,0,.7)]">
                </div>
                <div class="flex flex-col">
                    <label for="fileToUpload" class="my-2 drop-shadow-[5px_5px_3px_rgba(0,0,0,.7)]">Insira sua foto:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="file px-2  text-black border-3 rounded border-amber-400 h-12 bg-white drop-shadow-[5px_5px_7px_rgba(0,0,0,.7)]">
                </div>
                <button type="submit"
                    class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-amber-400 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-amber-400/20 border-2 border-amber-300 transition-all duration-300 hover:-translate-y-1  hover:bg-amber-300 hover:shadow-xl hover:shadow-amber-400/40 active:translate-y-0">

                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                        Ingressar
                    </span>

                    <!-- Brilho passando pelo botão -->
                    <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/40 to-transparent transition-transform duration-700 group-hover:translate-x-full">
                    </span>
                </button>
                <?php if ($erro !== ''): ?>
                    <p class="text-red-500 text-center w-full text-2xl">
                        <?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?>
                    </p>
                    <?php endif; ?>

                <?php if ($sucesso !== ''): ?>
                    <p class="text-green-400 text-center w-full text-2xl">
                        <?= htmlspecialchars($sucesso, ENT_QUOTES, 'UTF-8') ?> <a href="./login.php" class="text-blue-500 hover:underline">Ir para o login</a>
                    </p>
                <?php endif; ?>
            </form>
        </div>
    </main>
</body>
</html>


