<?php 
session_start();
include_once('./config/database.php');
include_once('./includes/data/data.php');

if (!isset($_SESSION['user_id'])){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>Configurar</title>
</head>
<body>
    <main class="bg-[url(../src/img/emfrentepraia.jpg)] min-h-screen min-w-screen">
        <div class="backdrop-blur-xs backdrop-grayscale-50 min-h-screen min-w-screen bg-none flex justify-center items-center flex-col">
            <div class="flex w-full h-full">
                <div class="m-10 bg-slate-700 flex-col rounded-2xl flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                    <h1 class="text-center text-3xl font-bold mb-6 text-amber-600">Imagens do banco de dados:</h1>
                    <?php if (!empty($imagens)){
                        foreach ($imagens as $imagem) { ?>
                    <div class="flex">
                        <img src="./src/uploads/<?= $imagem['nome'] ?>" alt="<?= $imagem['nome'] ?>" class="max-w-1/3 h-auto object-cover rounded-lg my-10">
                        <div class="flex">
                            <form action="./src/uploads/delete.php" method="post">
                                <button type="submit" name="delete" value="<?= $imagem['id'] ?>" class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-red-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-red-600/20 border-2 border-red-500 transition-all duration-300 hover:-translate-y-1  hover:bg-red-500 hover:shadow-xl hover:shadow-red-600/40 active:translate-y-0">
                                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                                        Deletar
                                    </span>
                                </button>
                            </form>
                            <form action="./src/uploads/tobanner.php" method="post">
                                <button type="submit" name="adicionar" value="<?= $imagem['id'] ?>" class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-blue-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-blue-600/20 border-2 border-blue-500 transition-all duration-300 hover:-translate-y-1  hover:bg-blue-500 hover:shadow-xl hover:shadow-blue-600/40 active:translate-y-0">
                                <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                                    Adicionar
                                </span>
                            </button>
                            </form>
                        </div>
                    </div>
                    <?php } } else{?>
                        <p class="text-red-500 text-center font-extrabold">Nenhuma imagem no banco</p>
                    <?php }?>
                </div>
                <div class="m-10 bg-slate-700 flex-col rounded-2xl flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                    <h1 class="text-center text-3xl font-bold mb-6 text-amber-600">Imagens do Banner:</h1>
                    <?php if(!empty($imagensBanner)){ foreach ($imagensBanner as $imagem) { ?>
                    <div class="flex">
                        <img src="./src/uploads/<?= $imagem['nome'] ?>" alt="<?= $imagem['nome'] ?>" class="max-w-1/3 h-auto object-cover rounded-lg my-10">
                        <div class="flex">
                            <form action="./src/uploads/deletefrombanner.php" method="post">
                                <button type="submit" name="delete" value="<?= $imagem['id'] ?>" class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-red-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-red-600/20 border-2 border-red-500 transition-all duration-300 hover:-translate-y-1  hover:bg-red-500 hover:shadow-xl hover:shadow-red-600/40 active:translate-y-0">
                                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                                        Tirar do banner
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php } } else{?>
                        <p class="text-red-500 text-center font-extrabold">Nenhuma imagem no banner</p>  
                    <?php }?>

                </div>
            </div>
            <div class="flex justify-around">
                <a href="dashboard.php" class="h-25 group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-blue-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-green-600/20 border-2 border-blue-500 transition-all duration-300 hover:-translate-y-1  hover:bg-blue-500 hover:shadow-xl hover:shadow-green-600/40 active:translate-y-0">
                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105 text-white">
                        Publicar Imagem
                    </span>
                </a>
                <a href="index.php" class="h-25 group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-green-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-gray-600/20 border-2 border-green-500 transition-all duration-300 hover:-translate-y-1  hover:bg-green-500 hover:shadow-xl hover:shadow-gray-600/40 active:translate-y-0">
                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105 text-white">
                        Voltar ao início
                    </span>
                </a>
            </div>
            <div class="flex w-full h-full">
                <div class="m-10 bg-slate-700 flex-col rounded-2xl flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                    <h1 class="text-center text-3xl font-bold mb-6 text-amber-600">Imagens do banco de dados:</h1>
                    <?php foreach ($depoimentos as $depoimento) { ?>
                    <div>
                    <div class="group relative overflow-hidden rounded-2xl
                            border border-slate-700
                            bg-slate-900
                            shadow-lg shadow-black/30
                            transition-all duration-300
                            hover:border-amber-400/60
                            hover:shadow-xl hover:shadow-amber-400/10">

                        <!-- Detalhe amarelo no topo -->
                        <div class="h-1 w-full bg-gradient-to-r
                                from-amber-500 via-yellow-300 to-amber-500
                                opacity-80
                                transition-opacity duration-300
                                group-hover:opacity-100">
                        </div>


                        <!-- Perfil -->
                        <div class="flex items-center gap-4
                                border-b border-slate-700
                                bg-slate-800/70 p-5">

                            <div class="relative">

                                <img
                                    src="<?= "./src/uploads/" . htmlspecialchars($depoimento["foto"]) ?>"
                                    alt="foto de perfil de <?= $depoimento["nome"] ?>"
                                    class="h-12 w-12 rounded-full object-cover
                                       border-2 border-amber-400
                                       shadow-md shadow-amber-400/20
                                       transition-transform duration-300
                                       group-hover:scale-110">

                            </div>

                            <div>
                                <p class="font-bold text-white">
                                    <?= $depoimento["nome"] ?>
                                </p>

                                <p class="text-xs text-amber-400">
                                    Aluno SESC SENAC
                                </p>
                            </div>

                        </div>


                        <!-- Comentário -->
                        <div class="relative p-6">

                            <!-- Aspas decorativas -->
                            <span class="absolute right-5 top-2
                                     text-6xl font-serif
                                     leading-none text-amber-400/10">
                                "
                            </span>

                            <p class="relative text-sm font-medium leading-7
                                  text-slate-300 text-justify">
                                <?= $depoimento["comentario"] ?>
                            </p>

                        </div>

                    </div>
                    <form action="./src/uploads/tocomment.php" method="post">
                        <button type="submit" name="adicionar" value="<?= $depoimento['id'] ?>" class="group mx-2 mt-5 mb-20 relative flex items-center justify-center overflow-hidden rounded-xl bg-blue-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-blue-600/20 border-2 border-blue-500 transition-all duration-300 hover:-translate-y-1  hover:bg-blue-500 hover:shadow-xl hover:shadow-blue-600/40 active:translate-y-0">
                            <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                                Adicionar
                            </span>
                        </button>
                    </form>
                    </div>

                <?php } ?>
                </div>
                <div class="m-10 bg-slate-700 flex-col rounded-2xl flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                    <h1 class="text-center text-3xl font-bold mb-6 text-amber-600">Imagens do Banner:</h1>
                    <?php if(!empty($imagensBanner)){ foreach ($imagensBanner as $imagem) { ?>
                    <div class="flex">
                        <img src="./src/uploads/<?= $imagem['nome'] ?>" alt="<?= $imagem['nome'] ?>" class="max-w-1/3 h-auto object-cover rounded-lg my-10">
                        <div class="flex">
                            <form action="./src/uploads/deletefrombanner.php" method="post">
                                <button type="submit" name="delete" value="<?= $imagem['id'] ?>" class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-red-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-red-600/20 border-2 border-red-500 transition-all duration-300 hover:-translate-y-1  hover:bg-red-500 hover:shadow-xl hover:shadow-red-600/40 active:translate-y-0">
                                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                                        Tirar do banner
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php } } else{?>
                        <p class="text-red-500 text-center font-extrabold">Nenhuma imagem no banner</p>  
                    <?php }?>

                </div>
            </div>
        </div>
    </main>
</body>
</html>