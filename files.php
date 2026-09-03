<?php 
session_start();
include_once('./config/database.php');
include_once('./includes/data/data.php');
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
    <main class="bg-[url(../src/img/emfrentepraia.jpg)]">
        <div class="backdrop-blur-xs backdrop-grayscale-50 h-full w-full bg-none flex justify-center items-center">
            <div class="bg-slate-700 flex-col rounded-2xl h-2/3 flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                <?php foreach ($imagens as $imagem) { ?>
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
                <?php } ?>
            </div>
            <div class="bg-slate-700 flex-col rounded-2xl h-2/3 flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                <h1 class="text-center text-3xl font-bold mb-6">Imagens do Banner</h1>
                <?php foreach ($imagensBanner as $imagem) { ?>
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
                <?php } ?>

            </div>
        </div>
        <a href="dashboard.php" class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-green-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-green-600/20 border-2 border-green-500 transition-all duration-300 hover:-translate-y-1  hover:bg-green-500 hover:shadow-xl hover:shadow-green-600/40 active:translate-y-0">
            <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                Publicar Imagem
            </span>
        </a>
        <a href="index.php" class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-gray-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-gray-600/20 border-2 border-gray-500 transition-all duration-300 hover:-translate-y-1  hover:bg-gray-500 hover:shadow-xl hover:shadow-gray-600/40 active:translate-y-0">
            <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                Voltar ao início
            </span>
        </a>
    </main>
</body>
</html>