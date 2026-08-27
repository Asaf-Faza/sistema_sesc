<?php
include_once("./includes/header.php")
?>

    <main >
        <section id="home">
            <div class="flex justify-center w-full">
                <!--Carrossel-->
                <div class="car relative overflow-hidden flex max-h-125 mb-5">
                    <div class="img-wrap flex transition-transform">
                        <img src="./src/img/trazsolpralavadeiradoareaial.png"
                        alt="1" class="h-auto w-screen">
                        <img src="./src/img/trazsolpralavadeiradoareaial.png"
                        alt="2" class="h-auto w-screen">
                        <img src="./src/img/trazsolpralavadeiradoareaial.png"
                        alt="3" class="h-auto w-screen">
                        <img src="./src/img/trazsolpralavadeiradoareaial.png"
                        alt="3" class="h-auto w-screen">
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
                <div class="mb-3 flex justify-around">
                    <div class=" bg-slate-800 rounded-lg w-50 h-60">
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
                    </div>
            </div>
        </section>
        <hr class=" border-2 border-amber-500 mx-20 my-10"/>
        <section>
            <div class="flex justify-around w-full my-5">
                <div class="rounded-[100%] w-50 h-50 bg-slate-900 flex justify-center items-center text-white text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>  
                </div>
                <div class="rounded-[100%] w-50 h-50 bg-slate-900 flex justify-center items-center text-white text-9xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
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
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>  
                </div>
            </div>
        </section>
        <section>

        </section>
    </main>
<?php
include_once("./includes/footer.php")
?>