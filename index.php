<?php 
include_once("./includes/header.php")
?>
<style>
        .car {
            position: relative;
            width: 80%;
            max-width: 600px;
            overflow: hidden;
        }
        .img-wrap {
            display: flex;
            transition: transform 0.5s ease;
        }
        .img-wrap img {
            width: 100%;
            height: auto;
        }
        .btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
</style>
    <main >
        <div class="flex justify-center w-full">
            <!--Carrossel-->
            <div class="car relative  overflow-hidden flex">
                <div class="img-wrap flex transition-transform">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20241228102812942963/0_ilw552fVUGbwIzbE.jpg"
                    alt="1" class="w-[100%] h-auto">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20241128161121752603/what-is-javascript.webp"
                    alt="2" class="w-[100%] h-auto">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20240829155421/Amazing-new-Javascript-features-in-ES15.webp"
                    alt="3" class="w-[100%] h-auto">
                </div>
                <button class="btn prev cursor-pointer bottom-1 absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
                </button>
                <button class="btn next cursor-pointer right-[10px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                </button>
            </div>
        </div>
        <div class="w-full h-60 text-white mb-40">
            <div class="mb-3 flex justify-around">
            <div class=" bg-slate-800 rounded-lg w-50 h-60">
<div class="rounded-t-lg bg-gray-400 p-2 ">lorem ipsum</div>
<p class="p-2">zaza</p>
            </div>
            <div class=" bg-slate-800 rounded-lg w-50 h-60">
<div class="rounded-t-lg bg-gray-400 p-2 ">lorem ipsum</div>
<p class="p-2">zaza</p>
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
            <hr class=" border-2 border-amber-500 ml-20 mr-20 mt-10">
          
        </div>
       
    </main>
<?php 
include_once("./includes/footer.php")
?>
