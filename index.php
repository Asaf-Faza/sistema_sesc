<?php
include_once("./includes/header.php");
include_once("./includes/data/data.php")
?>

<main>
    <section id="home" class="scroll-mt-28 bg-slate-950">

        <!-- Carrossel -->
        <div class="relative w-full overflow-hidden
                shadow-[0_10px_35px_rgba(0,0,0,0.45)]">

            <div class="car relative overflow-hidden">

                <!-- Imagens -->
                <div class="img-wrap flex transition-transform duration-700 ease-in-out">

                    <?php foreach ($banner as $imagemBanner) { ?>

                        <img
                            src="<?= $imagemBanner["imagem"] ?>"
                            alt="<?= $imagemBanner["nome"] ?>"
                            class="h-auto w-screen shrink-0 object-cover">

                    <?php } ?>

                </div>


                <div class="pointer-events-none absolute inset-y-0 left-0 w-24
                        bg-gradient-to-r from-black/30 to-transparent">
                </div>

                <div class="pointer-events-none absolute inset-y-0 right-0 w-24
                        bg-gradient-to-l from-black/30 to-transparent">
                </div>


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
                            d="M15.75 19.5 8.25 12l7.5-7.5" />

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
                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />

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

                <?php foreach ($depoimentos as $depoimento) { ?>

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
                                       group-hover:scale-110">

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

    <section id="about" class="scroll-mt-28 bg-slate-100 py-20">

    <div class="mx-auto flex max-w-7xl items-center gap-16 px-8 lg:px-12">

        <!-- ESQUERDA -->
        <div class="w-1/2">

            <p class="mb-3 text-sm font-bold uppercase tracking-[0.25em] text-amber-500">
                Conheça nossa escola
            </p>

            <h3 class="text-4xl font-extrabold text-slate-900 md:text-5xl">
                Sobre <span class="text-amber-500">Nós</span>
            </h3>

            <div class="mt-4 h-1 w-16 rounded-full bg-amber-400"></div>


            <div class="mt-8 max-w-xl space-y-5">

                <p class="text-justify font-medium leading-8 text-slate-600">
                    O Ensino Médio Integrado ao Técnico SESC SENAC
                    proporciona uma formação que une conhecimento,
                    prática e preparação para o futuro.
                </p>

                <p class="text-justify font-medium leading-8 text-slate-500">
                    Durante essa jornada, os estudantes têm contato com
                    diferentes áreas do conhecimento, projetos, atividades
                    práticas e experiências que complementam sua formação.
                </p>

                <p class="text-justify font-medium leading-8 text-slate-500">
                    Nosso objetivo é criar um ambiente onde aprender,
                    experimentar e desenvolver novas habilidades faça parte
                    da experiência de cada estudante.
                </p>

            </div>


            <!-- DESTAQUES -->
            <div class="mt-8 flex gap-3">

                <span class="rounded-lg border border-slate-200
                             bg-slate-50 px-4 py-2
                             text-sm font-semibold text-slate-600
                             transition-all duration-300
                             hover:-translate-y-1
                             hover:border-amber-300
                             hover:shadow-md">
                    Educação
                </span>

                <span class="rounded-lg border border-amber-200
                             bg-amber-50 px-4 py-2
                             text-sm font-semibold text-amber-600
                             transition-all duration-300
                             hover:-translate-y-1
                             hover:shadow-md">
                    Tecnologia
                </span>

                <span class="rounded-lg border border-slate-200
                             bg-slate-50 px-4 py-2
                             text-sm font-semibold text-slate-600
                             transition-all duration-300
                             hover:-translate-y-1
                             hover:border-amber-300
                             hover:shadow-md">
                    Futuro
                </span>

            </div>

        </div>


        <!-- DIREITA -->
        <div class="relative flex w-1/2 justify-center">

            <!-- Detalhe amarelo -->
            <div class="absolute bottom-[-15px] right-[-15px]
                        h-[85%] w-[85%]
                        rounded-3xl bg-amber-400">
            </div>

            <!-- Imagem -->
            <div class="relative z-10 overflow-hidden rounded-3xl
                        border border-slate-200
                        bg-white
                        shadow-[0_15px_35px_rgba(15,23,42,0.18)]">

                <img
                    src="./src/img/image copy.png"
                    alt="Estudantes do SESC SENAC"
                    class="w-full object-cover
                           transition-transform duration-700
                           hover:scale-105"
                >

            </div>

        </div>

    </div>

</section>



    <!-- EVENTOS -->
<section id="eventos" class="scroll-mt-28 bg-slate-100 px-6 py-20">

    <div class="mx-auto max-w-6xl">

        <!-- TÍTULO -->
        <div class="mb-14 text-center">

            <p class="mb-2 text-sm font-bold uppercase tracking-[0.25em] text-amber-500">
                Experiências
            </p>

            <h3 class="text-4xl font-extrabold tracking-tight text-slate-900 md:text-5xl">
                Eventos para os estudantes
            </h3>

            <div class="mx-auto mt-4 h-1 w-16 rounded-full bg-amber-400"></div>

            <p class="mx-auto mt-5 max-w-2xl text-slate-500">
                Momentos especiais para aprender, compartilhar experiências
                e aproveitar ainda mais a vida escolar.
            </p>

        </div>


        <!-- EVENTO 1 -->
        <article
            class="group mb-10 flex overflow-hidden rounded-3xl
                   bg-white shadow-[0_10px_30px_rgba(15,23,42,0.12)]
                   transition-all duration-300
                   hover:-translate-y-1
                   hover:shadow-[0_15px_35px_rgba(15,23,42,0.18)]">

            <!-- IMAGEM -->
            <div class="relative w-2/5 overflow-hidden">

                <img
                    src="./src/img/Curiosidades sobre nossa querida Portugal.png"
                    alt="Palestras para estudantes"
                    class="h-full min-h-72 w-full object-cover
                           transition-transform duration-700
                           group-hover:scale-105"
                >

                <div class="absolute left-5 top-5 rounded-full
                            bg-amber-400 px-4 py-1.5
                            text-xs font-bold uppercase tracking-wider
                            text-slate-900">
                    Evento
                </div>

            </div>


            <!-- CONTEÚDO -->
            <div class="flex w-3/5 flex-col justify-center px-10 py-10">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-500">
                    01 • Palestras
                </span>

                <h4 class="mt-2 text-3xl font-extrabold text-slate-900">
                    Conhecimento que inspira
                </h4>

                <div class="mt-4 h-1 w-12 rounded-full bg-amber-400"></div>

                <p class="mt-6 text-justify leading-7 text-slate-600">
                    Um espaço dedicado a receber palestras e conversas
                    que ajudam nossos estudantes a conhecer novas ideias,
                    compartilhar experiências e pensar sobre seus futuros.
                </p>

            </div>

        </article>


        <!-- EVENTO 2 -->
        <article
            class="group flex overflow-hidden rounded-3xl
                   bg-white shadow-[0_10px_30px_rgba(15,23,42,0.12)]
                   transition-all duration-300
                   hover:-translate-y-1
                   hover:shadow-[0_15px_35px_rgba(15,23,42,0.18)]">

            <!-- CONTEÚDO -->
            <div class="flex w-3/5 flex-col justify-center px-10 py-10">

                <span class="text-sm font-bold uppercase tracking-widest text-amber-500">
                    02 • Atividades
                </span>

                <h4 class="mt-2 text-3xl font-extrabold text-slate-900">
                    Aprender também é participar
                </h4>

                <div class="mt-4 h-1 w-12 rounded-full bg-amber-400"></div>

                <p class="mt-6 text-justify leading-7 text-slate-600">
                    Projetos e atividades pensados para estimular a
                    criatividade, a colaboração e o desenvolvimento
                    dos estudantes dentro e fora da sala de aula.
                </p>

            </div>


            <!-- IMAGEM -->
            <div class="relative w-2/5 overflow-hidden">

                <img
                    src="./src/img/Curiosidades sobre nossa querida Portugal.png"
                    alt="Atividades para estudantes"
                    class="h-full min-h-72 w-full object-cover
                           transition-transform duration-700
                           group-hover:scale-105"
                >

                <div class="absolute right-5 top-5 rounded-full
                            bg-slate-900/90 px-4 py-1.5
                            text-xs font-bold uppercase tracking-wider
                            text-white">
                    Atividade
                </div>

            </div>

        </article>

    </div>

</section>


<!-- TRANSIÇÃO PARA O RODAPÉ -->
<div class="h-16 bg-gradient-to-b from-slate-100 to-white"></div>

</main>
<?php
include_once("./includes/footer.php")
?>

<!-- drop-shadow-[15px_15px_7px_rgba(10,190,240,.3)] 
  SOMBRA MANEIRONA 
 -->