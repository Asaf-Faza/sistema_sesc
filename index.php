<?php 
include_once("./includes/header.php")
?>

    <main>
        <!--Carrossel-->
        <div class="relative w-full max-w-150 car"> <!--nao mexe krai-->
            <div class="flex transition-transform ease-in-out img-wrap">
                <img src="./src/img/b4c80c0e47ef12d28adf4dc73f0e9d48bc9fb787.jpg" 
                alt="1" class="w-full h-auto">
                <img src="./src/img/fundoQuizz.png" 
                alt="2" class="w-full h-auto">
                <img src="src/img/wp12452248-portugal-4k-wallpapers.jpg" 
                alt="3" class="w-full h-auto">
            </div>
            <button class="prev absolute top-1/2 translate-y-1/2 border-0 p-2.5 text-[16px] left-2.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button class="next absolute top-1/2 translate-y-1/2 border-0 p-2.5 text-[16px] right-2.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </main>
<?php 
include_once("./includes/footer.php")
?>
