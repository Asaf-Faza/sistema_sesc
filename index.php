<?php
include_once("./includes/header.php");
include_once("./includes/data/data.php")
?>

    <main >
        <section id="home" class="scroll-mt-28 bg-slate-950">

    <!-- Carrossel -->
    <div class="relative w-full overflow-hidden
                shadow-[0_10px_35px_rgba(0,0,0,0.45)]">

        <div class="car relative overflow-hidden">

            <!-- Imagens -->
            <div class="img-wrap flex transition-transform duration-700 ease-in-out">

                <?php foreach ($banner as $imagemBanner){ ?>

                    <img
                        src="<?= $imagemBanner["imagem"] ?>"
                        alt="<?= $imagemBanner["nome"] ?>"
                        class="h-auto w-screen shrink-0 object-cover"
                    >

                <?php } ?>

            </div>


            <!-- Gradiente nas laterais -->
            <div class="pointer-events-none absolute inset-y-0 left-0 w-24
                        bg-gradient-to-r from-black/30 to-transparent">
            </div>

            <div class="pointer-events-none absolute inset-y-0 right-0 w-24
                        bg-gradient-to-l from-black/30 to-transparent">
            </div>


            <!-- Botão anterior -->
            <button
                class="btn prev group absolute left-4 top-1/2
                       flex h-12 w-12 -translate-y-1/2
                       cursor-pointer items-center justify-center
                       rounded-full
                       border border-white/20
                       bg-black/30 text-white
                       backdrop-blur-sm
                       shadow-lg
                       transition-all duration-300
                       hover:scale-110
                       hover:border-amber-400
                       hover:bg-amber-400
                       hover:text-slate-900
                       active:scale-95">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-6 w-6 transition-transform duration-300
                           group-hover:-translate-x-0.5">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 19.5 8.25 12l7.5-7.5"
                    />

                </svg>

            </button>


            <!-- Botão próximo -->
            <button
                class="btn next group absolute right-4 top-1/2
                       flex h-12 w-12 -translate-y-1/2
                       cursor-pointer items-center justify-center
                       rounded-full
                       border border-white/20
                       bg-black/30 text-white
                       backdrop-blur-sm
                       shadow-lg
                       transition-all duration-300
                       hover:scale-110
                       hover:border-amber-400
                       hover:bg-amber-400
                       hover:text-slate-900
                       active:scale-95">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-6 w-6 transition-transform duration-300
                           group-hover:translate-x-0.5">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m8.25 4.5 7.5 7.5-7.5 7.5"
                    />

                </svg>

            </button>

        </div>

        <!-- Linha decorativa -->
        <div class="absolute bottom-0 left-0 h-1 w-full
                    bg-gradient-to-r
                    from-amber-500 via-yellow-300 to-amber-500">
        </div>

    </div>

</section>

        <section id="depoimentos" class="scroll-mt-28 bg-slate-950 py-16">

    <div class="mx-auto max-w-7xl px-6">

        <!-- Título -->
        <div class="mb-12 text-center">

            <span class="text-sm font-bold uppercase tracking-[0.3em] text-amber-400">
                Depoimentos
            </span>

            <h2 class="mt-2 text-3xl font-extrabold text-white md:text-4xl">
                O que nossos alunos dizem
            </h2>

            <div class="mx-auto mt-4 h-1 w-20 rounded-full bg-amber-400
                        shadow-[0_0_12px_rgba(251,191,36,0.5)]">
            </div>

            <p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-slate-400">
                Conheça algumas experiências de quem já faz parte
                da comunidade SESC SENAC.
            </p>

        </div>


        <!-- Cards -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            <?php foreach ($depoimentos as $depoimento){ ?>

                <div class="group relative overflow-hidden rounded-2xl
                            border border-slate-700
                            bg-slate-900
                            shadow-lg shadow-black/30
                            transition-all duration-300
                            hover:-translate-y-2
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
                                src="<?= $depoimento["foto"] ?>"
                                alt="foto de perfil de <?= $depoimento["nome"] ?>"
                                class="h-12 w-12 rounded-full object-cover
                                       border-2 border-amber-400
                                       shadow-md shadow-amber-400/20
                                       transition-transform duration-300
                                       group-hover:scale-110"
                            >

                            <!-- Bolinha online -->
                            <span class="absolute bottom-0 right-0
                                         h-3 w-3 rounded-full
                                         border-2 border-slate-800
                                         bg-green-400">
                            </span>

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

            <?php } ?>

        </div>

    </div>

</section>

        <section id="cursos" class="scroll-mt-28 bg-slate-950 py-16">

    <div class="mx-auto max-w-7xl px-6">

        <!-- Título -->
        <div class="mb-14 text-center">

            <span class="font-poppins text-sm font-bold uppercase tracking-[0.3em] text-amber-400">
                Formação
            </span>

            <h3 class="mt-2 font-poppins text-4xl font-extrabold
                       text-white md:text-5xl
                       drop-shadow-[0_4px_8px_rgba(0,0,0,0.4)]">
                Cursos
                <span class="text-amber-400">↓</span>
            </h3>

            <div class="mx-auto mt-4 h-1 w-20 rounded-full
                        bg-gradient-to-r from-amber-500 via-yellow-300 to-amber-500
                        shadow-[0_0_12px_rgba(251,191,36,0.4)]">
            </div>

            <p class="mx-auto mt-5 max-w-2xl font-poppins text-sm
                      leading-relaxed text-slate-400">
                Desenvolva novas habilidades, amplie seus conhecimentos
                e prepare-se para o futuro.
            </p>

        </div>


        <!-- Cursos -->
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">


            <!-- Informática -->
            <div class="group flex flex-col items-center rounded-2xl
                        border border-slate-800 bg-slate-900
                        p-7 text-center
                        shadow-lg shadow-black/20
                        transition-all duration-300
                        hover:-translate-y-3
                        hover:border-amber-400/60
                        hover:shadow-xl hover:shadow-amber-400/10">

                <div class="flex h-32 w-32 items-center justify-center
                            rounded-full border-2 border-slate-700
                            bg-slate-800 text-amber-400
                            shadow-inner shadow-black/30
                            transition-all duration-300
                            group-hover:border-amber-400
                            group-hover:bg-amber-400
                            group-hover:text-slate-900
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor"
                         class="h-16 w-16">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                    </svg>

                </div>

                <h4 class="mt-6 font-poppins text-xl font-bold text-white">
                    Curso em Informática
                </h4>

                <p class="mt-2 font-poppins text-sm leading-6 text-slate-400">
                    Tecnologia, ferramentas digitais e conhecimentos para o mercado.
                </p>

            </div>


            <!-- Clube de leitura -->
            <div class="group flex flex-col items-center rounded-2xl
                        border border-slate-800 bg-slate-900
                        p-7 text-center
                        shadow-lg shadow-black/20
                        transition-all duration-300
                        hover:-translate-y-3
                        hover:border-amber-400/60
                        hover:shadow-xl hover:shadow-amber-400/10">

                <div class="flex h-32 w-32 items-center justify-center
                            rounded-full border-2 border-slate-700
                            bg-slate-800 text-amber-400
                            transition-all duration-300
                            group-hover:border-amber-400
                            group-hover:bg-amber-400
                            group-hover:text-slate-900
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor"
                         class="h-16 w-16">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>

                </div>

                <h4 class="mt-6 font-poppins text-xl font-bold text-white">
                    Clubes de leitura
                </h4>

                <p class="mt-2 font-poppins text-sm leading-6 text-slate-400">
                    Leitura, discussão e troca de ideias em grupo.
                </p>

            </div>


            <!-- Vestibulares -->
            <div class="group flex flex-col items-center rounded-2xl
                        border border-slate-800 bg-slate-900
                        p-7 text-center
                        shadow-lg shadow-black/20
                        transition-all duration-300
                        hover:-translate-y-3
                        hover:border-amber-400/60
                        hover:shadow-xl hover:shadow-amber-400/10">

                <div class="flex h-32 w-32 items-center justify-center
                            rounded-full border-2 border-slate-700
                            bg-slate-800 text-amber-400
                            transition-all duration-300
                            group-hover:border-amber-400
                            group-hover:bg-amber-400
                            group-hover:text-slate-900
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor"
                         class="h-16 w-16">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>

                </div>

                <h4 class="mt-6 font-poppins text-xl font-bold text-white">
                    Preparo para vestibulares
                </h4>

                <p class="mt-2 font-poppins text-sm leading-6 text-slate-400">
                    Preparação e acompanhamento para os principais vestibulares.
                </p>

            </div>


            <!-- Técnico -->
            <div class="group flex flex-col items-center rounded-2xl
                        border border-slate-800 bg-slate-900
                        p-7 text-center
                        shadow-lg shadow-black/20
                        transition-all duration-300
                        hover:-translate-y-3
                        hover:border-amber-400/60
                        hover:shadow-xl hover:shadow-amber-400/10">

                <div class="flex h-32 w-32 items-center justify-center
                            rounded-full border-2 border-slate-700
                            bg-slate-800 text-amber-400
                            transition-all duration-300
                            group-hover:border-amber-400
                            group-hover:bg-amber-400
                            group-hover:text-slate-900
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor"
                         class="h-16 w-16">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>

                </div>

                <h4 class="mt-6 font-poppins text-xl font-bold text-white">
                    Formação técnica
                </h4>

                <p class="mt-2 font-poppins text-sm leading-6 text-slate-400">
                    Conhecimentos técnicos para desenvolver sua carreira.
                </p>

            </div>

        </div>

    </div>

</section>

        <section class="scroll-mt-28" id="about">
            <div class="flex">
                <div class="text flex-col w-1/2  px-10 py-20">
                    <h3 class="font-extrabold font-mono text-4xl drop-shadow-[5px_5px_3px_rgba(0,0,0,.3)] text-blue-900">Sobre Nós</h3>
                    <hr class="w-1/3 mask-r-from-60% border-blue-900 border-2">
                    <div class="flex h-full items-center">
                        <p class="font-semibold">"Od Bihaca do Petrovca sela
Do Petrovca sela
Srpska Zemlja Napadnuta Cela
Napadnuta Cela

Karadzicu Vodi Srbe Svoje
Vodi Srbe Svoje
Nek Se Vidi Nikog Se Ne Boje
Nikog Se Ne Boje

Ustale Hrvatske Ustase
Hrvatse Ustase
Ne Dirajte U Ognjiste Nase
Dirajte Ognjiste Nase

Karadzicu Vodi Srbe Svoje
Vodi Srbe Svoje
Nek Se Vidi Nikog Se Ne Boje
Nikog Se Ne Boje

Iz Krajine Krenuli Su Vuci
Krenuli Su Vuci
Cuvajte Se Ustase I Turci
Ustase I Turci

Karadzicu Vodi Srbe Svoje
Vodi Srbe Svoje
Nek Se Vidi Nikog Se Ne Boje
Nikog Se Ne Boje

U Odbrani Svoga Srpskog Roda
Svoga Srpskog Roda
Borimo Se Draga Nam Sloboda
Draga Nam Sloboda

Karadzicu Vodi Srbe Svoje
Vodi Srbe Svoje
Nek Se Vidi Nikog Se Ne Boje
Nikog Se Ne Boje
Nek Se Vidi Nikog Se Ne Boje
Nikog Se Ne Boje"</p>
                    </div>
                </div>
                <div class="flex w-1/2 h-auto p-5 m-5 relative">
                    <img src="./src/img/sesc-caioba-unidade-de-servico-01-1024x683.jpg" alt="" class="z-10 rounded-md drop-shadow-[15px_15px_7px_rgba(0,0,0,.3)]" />
                    <div class="absolute bottom-0 right-0 bg-amber-500 w-11/12 h-11/12"></div>
                </div>
            </div>
        </section> 
        <section id="eventos" class="scroll-mt-28 p-10 bg-amber-600 mt-4 text-white rounded-t-2xl">
            <h3 class="font-bold text-4xl drop-shadow-[5px_5px_3px_rgba(0,0,0,.3)] text-center mb-10">Eventos para os estudantes!</h3>
            <div class="flex-col">
                <div class="flex gap-10 mb-10">
                    <img src="./src/img/Curiosidades sobre nossa querida Portugal.png" alt="" class="w-1/3 h-auto drop-shadow-[-15px_15px_7px_rgba(0,0,0,.3)] rounded-tr-2xl rounded-bl-2xl">
                    <div class="w-2/3 flex-col text-justify p-10 bg-blue-500 rounded-3xl font-semibold drop-shadow-[15px_15px_7px_rgba(0,0,0,.3)]">
                        <h4 class="italic mb-5 font-extrabold text-2xl tracking-wider text-center w-full text-amber-400">PALESTRAS</h4>
                        <p class="font-semibold flex items-center h-1/2 text-xl">Aqui, temos um espaço dedicado a receber palestras motivadoras e concientes sobre a jornada de nossos jovens em seus brilhantes futuros. Nosso espaço está exclusivamente reservado a boas conversas e para xingar a extrema direita. Amamos o Lula nosso prefeito</p>
                    </div>
                </div>
                <div class="flex gap-10 mb-10">
                    <div class="w-2/3 flex-col text-justify p-10 bg-blue-500 rounded-3xl font-semibold drop-shadow-[15px_15px_7px_rgba(0,0,0,.3)]">
                        <h4 class="italic mb-5 font-extrabold text-xl tracking-wider text-center w-full">PALESTRAS</h4>
                    </div>
                    <img src="./src/img/Curiosidades sobre nossa querida Portugal.png" alt="" class="w-1/3 h-auto drop-shadow-[-15px_15px_7px_rgba(0,0,0,.3)] rounded-tl-2xl rounded-br-2xl">
                </div>
            </div>
        </section>
        <div class="bg-linear-to-t from-white to-amber-600 font-bold text-2xl text-center p-10">
    </main>
<?php
include_once("./includes/footer.php")
?>

 <!-- drop-shadow-[15px_15px_7px_rgba(10,190,240,.3)] 
  SOMBRA MANEIRONA 
 -->