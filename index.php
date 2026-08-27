<?php
include_once("./includes/header.php")
?>

    <main >
        <div class="flex justify-center w-full">
            <!--Carrossel-->
            <div class="car relative overflow-hidden flex max-w-[1630px] mb-5">
                <div class="img-wrap flex transition-transform">
                    <img src="./src/img/banner.png"
                    alt="1" class="h-auto w-screen">
                    <img src="./src/img/banner.png"
                    alt="2" class="h-auto w-screen">
                    <img src="./src/img/banner.png"
                    alt="3" class="h-auto w-screen">
                    <img src="./src/img/banner.png"
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
        <div class="w-full h-60 text-white mb-40 mt-7">
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
        <hr class=" border-2 border-amber-500 ml-20 mr-20 mt-10"/>
    </main>
<?php
include_once("./includes/footer.php")
?>