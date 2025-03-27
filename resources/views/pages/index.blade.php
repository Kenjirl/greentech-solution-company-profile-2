<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solution Group</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('public/img/icon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="w-full h-[100vh] p-8 flex gap-8 bg-lime-300 font-[Quicksand]">
        <div class="relative w-3/4">
            <img class="w-full h-full object-cover rounded-[2em]"
                src="./img/5.jpg" alt="Main Image">

            <div class="absolute bottom-0 left-0">
                <div class="w-[150px] h-[75px] flex items-center justify-start bg-lime-300 rounded-tr-[2em]">
                    <p class="w-fit py-2 px-4 border rounded-full">
                        Lighting by
                    </p>
                </div>
                <div class="w-[250px] h-[75px] flex items-center justify-start bg-lime-300 rounded-tr-[2em]">
                    <h1 class="text-[2.7em] font-bold">
                        GreenTech
                    </h1>
                </div>
                <div class="w-[350px] h-[75px] flex items-center justify-start bg-lime-300 rounded-tr-[2em]">
                    <p class="text-[2.7em] font-bold">
                        Solution Group
                    </p>
                </div>
            </div>
        </div>

        <div class="w-1/4 h-full flex flex-col gap-8">
            <nav class="w-full h-1/3 grid grid-cols-2 gap-[1px] bg-slate-900">
                <a class="w-full flex items-center justify-center text-lime-300 bg-slate-900 font-semibold outline-none
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/') }}">HOME</a>
                <a class="w-full flex items-center justify-center bg-lime-300 text-slate-900 font-semibold outline-none
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/about') }}">ABOUT</a>
                <a class="w-full flex items-center justify-center bg-lime-300 text-slate-900 font-semibold outline-none
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/services') }}">SERVICES</a>
                <a class="w-full flex items-center justify-center bg-lime-300 text-slate-900 font-semibold outline-none
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/contact') }}">CONTACT</a>
            </nav>

            <div class="relative w-full h-2/3">
                <img class="w-full h-full object-cover object-left rounded-[2em] brightness-50"
                    id="lightImage" src="./img/6.jpg" alt="Sub Image">

                <div class="absolute top-4 left-4">
                    <p class="text-white text-xl">
                        TURN YOUR ROOM LIGHT <br>
                        <span id="lightOffText" class="font-semibold text-3xl">
                            FROM LOW ....
                        </span>
                        <span id="lightOnText" class="hidden text-lime-300 font-semibold text-3xl">
                            TO LIGHT UP!
                        </span>
                    </p>
                </div>

                <div class="absolute bottom-4 left-0 w-full flex items-center justify-center">
                    <button id="lightOnBtn" class="w-fit px-4 py-2 rounded-full bg-lime-300 text-slate-900 font-semibold outline-none shadow-lime-300
                        hover:shadow-[0_0_10px_rgb(255,255,255)] focus:shadow-[0_0_10px_rgb(255,255,255)]
                        active:scale-90 active:shadow-none transition-all cursor-pointer">
                        LIGHT ON
                    </button>
                    <button id="lightOffBtn" class="hidden w-fit px-4 py-2 rounded-full text-lime-300 bg-slate-900 font-semibold outline-none shadow-slate-900
                        hover:shadow-[0_0_10px_rgb(255,255,255)] focus:shadow-[0_0_10px_rgb(255,255,255)]
                        active:scale-90 active:shadow-none transition-all cursor-pointer">
                        LIGHT OFF
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const img = document.getElementById("lightImage");
            const btnOn = document.getElementById("lightOnBtn");
            const btnOff = document.getElementById("lightOffBtn");
            const txtOn = document.getElementById("lightOnText");
            const txtOff = document.getElementById("lightOffText");

            btnOn.addEventListener("click", function () {
                img.classList.remove("brightness-50");
                btnOn.classList.add("hidden");
                btnOff.classList.remove("hidden");
                txtOn.classList.remove("hidden");
                txtOff.classList.add("hidden");
            });

            btnOff.addEventListener("click", function () {
                img.classList.add("brightness-50");
                btnOff.classList.add("hidden");
                btnOn.classList.remove("hidden");
                txtOn.classList.add("hidden");
                txtOff.classList.remove("hidden");
            });
        });
    </script>
</body>
</html>
