<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./src/custom.css">
    <title>Dashboard</title>
</head>
<body>
    <header></header>
    <main class="h-screen bg-[url(../src/img/emfrentepraia.jpg)]">
        <div class="backdrop-blur-xs backdrop-grayscale-50 h-full w-full bg-none flex justify-center items-center">
            <form action="./src/uploads/upload.php" method="post" enctype="multipart/form-data" class="bg-slate-700 flex-col rounded-2xl h-2/3 flex w-1/2 justify-around p-10 font-semibold text-2xl text-amber-100 drop-shadow-[15px_15px_7px_rgba(0,0,30,.7)]">
                Selecione imagem para fazer upload:
                <input type="file" name="fileToUpload" id="fileToUpload" class="file px-2  text-black border-3 rounded border-amber-400 h-12 bg-white drop-shadow-[5px_5px_7px_rgba(0,0,0,.7)]">
                <button type="submit"
                    class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-amber-400 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-amber-400/20 border-2 border-amber-300 transition-all duration-300 hover:-translate-y-1  hover:bg-amber-300 hover:shadow-xl hover:shadow-amber-400/40 active:translate-y-0">

                    
                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                        Postar
                    </span>

                    <!-- Brilho passando pelo botão -->
                    <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/40 to-transparent transition-transform duration-700 group-hover:translate-x-full">
                    </span>
                </button>

                <a href="files.php" class="group mx-2 mt-10 relative flex items-center justify-center overflow-hidden rounded-xl bg-blue-600 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-blue-600/20 border-2 border-blue-500 transition-all duration-300 hover:-translate-y-1  hover:bg-blue-500 hover:shadow-xl hover:shadow-blue-600/40 active:translate-y-0">
                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                        Ver Imagens
                    </span>
                </a>

            </form>
        </div>
    </main>
</body>
</html>