<!DOCTYPE html>
<html lang="pt-br">
<link>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--CSS do Site-->
<link rel="stylesheet" href="./src/output.css">
<link rel="stylesheet" href="./src/custom.css">
<title>Sistema SESC SENAC</title>

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <header class="sticky top-0 z-50 w-full bg-slate-900/95 backdrop-blur-lg text-blue-50 border-b border-amber-400 shadow-[0_4px_20px_rgba(0,0,0,0.6)]">

        <nav class="flex justify-between items-center p-4 text-blue-50">
            <div class="flex">
                <div class="flex-col text-start relative select-none font-extrabold leading-2 align-middle items-center">
                    <p class="text-yellow-400 italic text-[23px] leading-0">ENSINO MÉDIO</p>
                    <p class="text-white text-4xl leading-12">INTEGRADO</p>
                    <p class="text-transparent stroke absolute top-3.5 text-[45px] opacity-20">INTEGRADO</p>
                    <p class="text-yellow-400 italic text-[16.5px] leading-0">AO TÉCNICO SESC SENAC</p>
                </div>
            </div>

            <!-- Menu -->
            <div class="hidden lg:flex text-xl font-semibold text-center w-full justify-around xl:mx-50">
                <a href="#depoimentos"
                    class="relative py-2 transition-all duration-300 hover:text-amber-400 after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:-translate-x-1/2 after:bg-amber-400 after:transition-all after:duration-300 hover:after:w-full">
                    depoimentos
                </a>

                <a href="#cursos"
                    class="relative py-2 transition-all duration-300 hover:text-amber-400 after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:-translate-x-1/2 after:bg-amber-400 after:transition-all after:duration-300 hover:after:w-full">
                    formação
                </a>

                <a href="#about"
                    class="relative py-2 transition-all duration-300 hover:text-amber-400 after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:-translate-x-1/2 after:bg-amber-400 after:transition-all after:duration-300 hover:after:w-full">
                    sobre nós
                </a>

                <a href="#eventos"
                    class="relative py-2 transition-all duration-300 hover:text-amber-400 after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:-translate-x-1/2 after:bg-amber-400 after:transition-all after:duration-300 hover:after:w-full">
                    eventos
                </a>

                <a href="#valores"
                    class="relative py-2 transition-all duration-300 hover:text-amber-400 after:absolute after:left-1/2 after:-bottom-1 after:h-[2px] after:w-0 after:-translate-x-1/2 after:bg-amber-400 after:transition-all after:duration-300 hover:after:w-full">
                    valores
                </a>
            </div>

            <!-- Botão -->
            <div class="flex text-center items-center">
                <a href="#"
                    class="group relative flex items-center justify-center overflow-hidden rounded-xl bg-amber-400 px-6 py-3 text-lg xl:text-xl font-bold text-slate-900 shadow-lg shadow-amber-400/20 border-2 border-amber-300 transition-all duration-300 hover:-translate-y-1  hover:bg-amber-300 hover:shadow-xl hover:shadow-amber-400/40 active:translate-y-0">

                    <span class="relative z-10 transition-transform duration-300 group-hover:scale-105">
                        Ingressar
                    </span>

                    <!-- Brilho passando pelo botão -->
                    <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/40 to-transparent transition-transform duration-700 group-hover:translate-x-full">
                    </span>
                </a>
            </div>
        </nav>
    </header>