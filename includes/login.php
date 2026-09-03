<?php 
    session_start();
    include_once('../config/database.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($email) || !empty($senha)){
            $_SESSION['erro'] = "Preencha todos os campos";
        }
        $sql = $conexao->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = :email");
        $sql->execute(['email' => $email]);
        $usuario = $sql->fetch();

        if($usuario && password_verify($senha, $usuario['senha'])){
            session_regenerate_id(true);

            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['nome'];

            header("Location: ../index.php");
            exit;
        } else {
            $_SESSION['erro'] = "Nome ou senha inválidos.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <title>Bem Vindo!</title>
</head>
<body>
    <main class=" h-screen bg-[url(../src/img/emfrentepraia.jpg)]">
        <div class="backdrop-blur-xs backdrop-grayscale-50 h-full w-full bg-none flex justify-center items-center">
            <form action="login.php" method="POST" class="bg-slate-700 flex-col rounded-2xl h-2/3 flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                <div class="flex-col text-start relative select-none font-extrabold leading-2 align-middle items-center">
                    <p class="text-yellow-400 italic text-[23px] leading-0">ENSINO MÉDIO</p>
                    <p class="text-white text-4xl leading-12">INTEGRADO</p>
                    <p class="text-transparent stroke absolute top-3.5 text-[45px] opacity-20">INTEGRADO</p>
                    <p class="text-yellow-400 italic text-[16.5px] leading-0">AO TÉCNICO SESC SENAC</p>
                </div>
                <div class="flex flex-col">
                    <label for="email" class="my-2 drop-shadow-[5px_5px_3px_rgba(0,0,0,.7)]">Insira seu email</label>
                    <input type="email" id="email" name="email" class="px-2 text-black border-3 rounded border-amber-400 h-12 bg-white drop-shadow-[5px_5px_7px_rgba(0,0,0,.7)]">
                </div>
                <div class="flex flex-col">
                    <label for="senha" class="my-2 drop-shadow-[5px_5px_3px_rgba(0,0,0,.7)]">Insira sua senha</label>
                    <input type="password" id="senha" name="senha" class="px-2  text-black border-3 rounded border-amber-400 h-12 bg-white drop-shadow-[5px_5px_7px_rgba(0,0,0,.7)]">
                </div>
                <button type="submit"
                    class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-amber-400 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-amber-400/20 border-2 border-amber-300 transition-all duration-300 hover:-translate-y-1  hover:bg-amber-300 hover:shadow-xl hover:shadow-amber-400/40 active:translate-y-0">

                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                        Entrar!
                    </span>

                    <!-- Brilho passando pelo botão -->
                    <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/40 to-transparent transition-transform duration-700 group-hover:translate-x-full">
                    </span>
                </button>
                <?php if (isset($_SESSION['erro'])){?>
                <p class="text-red-500 text-center w-full text-2xl"><?=$_SESSION['erro']?></p>
                <?php }?>
            </form>
        </div>
    </main>
</body>
</html>