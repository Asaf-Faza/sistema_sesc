<?php
include_once("./includes/header.php");
include_once("./includes/data/data.php")
?>

    <main >
        <section id="home">
            <div class="flex justify-center w-full">
                <!--Carrossel-->
                <div class="car relative overflow-hidden flex mb-5 shadow-lg/25">
                    <div class="img-wrap flex transition-transform">
                        <?php foreach ($banner as $imagemBanner){?>
                            <img src="<?= $imagemBanner["imagem"] ?>"
                            alt="<?= $imagemBanner["nome"] ?>" class="h-auto w-screen">
                        <?php }?>
                    </div>
                    <button class="btn prev cursor-pointer absolute hover:bg-black left-2.5 bg-[rgba(122,122,122,0.5)] top-[50%] transform -translate-y-1/2 text-white p-2.5 text-[16px] h-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
                    </button>
                    <button class="btn next cursor-pointer absolute hover:bg-black right-2.5 bg-[rgba(122,122,122,0.5)] top-[50%] transform -translate-y-1/2 text-white p-2.5 text-[16px] h-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                    </button>
                </div>
            </div>
        </section>
        <section id="depoimentos">
            <div class="w-full h-60 text-white mt-7">
                <div class="mb-3 flex gap-5 justify-around">
                    <?php foreach ($depoimentos as $depoimento){?>
                        <div class="enter bg-slate-800 rounded-lg max-w-1/5  shadow-xl/55 shadow-slate-800">
                            <div class="rounded-t-lg bg-gray-400 p-2 flex gap-3">
                                <img src="<?= $depoimento["foto"] ?>" alt="foto de perfil de <?= $depoimento["nome"] ?>" class="w-10 h-10 rounded-full">
                                <p class="self-center font-bold text-white"><?= $depoimento["nome"] ?></p>
                            </div>
                            <p class="p-5 font-semibold font text-justify"><?= $depoimento["comentario"] ?></p>
                        </div>
                    <?php }?>
                    <!-- <div class=" bg-slate-800 rounded-lg w-50 h-60">
                        <div class="rounded-t-lg bg-gray-400 p-2 ">lorem ipsumaaaa</div>
                        <p class="p-2">zaza</p>
                    </div>
                    <div class=" bg-slate-800 rounded-lg w-50 h-60">
                        <div class="rounded-t-lg bg-gray-400 p-2 ">lorem ipsum</div>
                        <p class="p-2">lorem ipsum</p>
                    </div>
                    <div class="bg-slate-800 rounded-lg w-50 h-60">
                        <div class=" rounded-t-lg bg-gray-400 p-2 ">lorem ipsum</div>
                        <p class="p-2">zaza</p>
                    </div>
                    <div class="bg-slate-800 rounded-lg w-50 h-60">
                        <div class="rounded-t-lg bg-gray-400 p-2 ">lorem ipsum</div>
                        <p class="p-2">zaza</p>
                    </div> -->
                </div>
            </div>
        </section>
        <hr class=" border-2 border-amber-500 mx-20 my-10"/>
        <
        <section id="about">
            <div class="flex">
                <div class="text flex-col w-1/2  px-10 py-20">
                    <h3 class="font-extrabold font-mono text-4xl drop-shadow-[5px_5px_3px_rgba(0,0,0,.3)]">Sobre Nós</h3>
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
        <section id="valores" class="p-10 bg-amber-600 mt-4 text-white">
            <h3 class="font-bold text-4xl drop-shadow-[5px_5px_3px_rgba(0,0,0,.3)] text-center mb-10">Nossos valores</h3>
            <div class="flex-col">
                <div class="flex">
                    <img src="./src/img/Curiosidades sobre nossa querida Portugal.png" alt="" class="w-1/2 h-auto p-10">
                    <p class="text-justify p-10 bg-blue-600 rounded-3xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore iure vero nemo corrupti porro incidunt exercitationem magnam distinctio accusamus cum laudantium a velit quas eaque aspernatur corporis doloribus, voluptatibus minus!</p>
                </div>
            </div>
</section>
<section class="bg-amber-600">
    <div class="flex-col justify-center text-center text-white">
        <h3 class="font-bold text-4xl drop-shadow-[5px_5px_3px_rgba(0,0,0,.3)] text-center mb-10">Cursos ⬇️</h3>
        <div class="bg-linear-to-t from-white to-amber-600 rounded font-bold text-2xl text-center p-10">
      
        </div>
    </div>
</section >
<section>
            <div class="flex justify-around w-full my-5">
                <div class="rounded-[100%] w-50 h-50 bg-slate-900 flex justify-center items-center text-white text-9xl">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
</svg>

                </div>
                <div class="rounded-[100%] w-50 h-50 bg-slate-900 flex justify-center items-center text-white text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
                <div class="rounded-[100%] w-50 h-50 bg-slate-900 flex justify-center items-center text-white text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>  
                </div>
                <div class="rounded-[100%] w-50 h-50 bg-slate-900 flex justify-center items-center text-white text-9xl">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
</svg>

                </div>
            </div>
        </section>
    </main>
<?php
include_once("./includes/footer.php")
?>

 <!-- drop-shadow-[15px_15px_7px_rgba(10,190,240,.3)] 
  SOMBRA MANEIRONA 
 -->