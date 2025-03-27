@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="w-full mb-8 flex items-end justify-between">
        <h2 class="w-full text-[3em] font-bold">
            Efficient Lighting Solutions <br> & In-House Financing
        </h2>

        <p class="w-full text-end">
            You'll be assigned a personal Controls Manager to continuously
            <br>monitor your systems and perform data analysis
            <br>to improve cost efficiency and effectiveness.
        </p>
    </div>

    <div class="max-w-[1200px] mb-16 mx-auto grid grid-cols-3 gap-4 text-white">
        <div class="gap-4 flex flex-col">
            <div class="relative rounded-[2em] overflow-hidden group">
                <img class="w-full aspect-square object-cover rounded-[2em]"
                    src="./img/2.jpg" alt="Image 1">

                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-slate-900/80 opacity-0 scale-150
                    group-hover:opacity-100 group-hover:scale-100 transition-all">
                    <p class="w-4/5 text-white text-center">
                        <span class="font-semibold">GreenShare Service Program</span>
                        <br>Our Lighting as a Service (LaaS) plan allows you to upgrade your facility with no upfront costs, offering a cash flow positive solution through monthly payments lower than energy savings.
                    </p>
                </div>
            </div>
            <div class="relative rounded-[2em] overflow-hidden group">
                <img class="w-full aspect-[9/16] object-cover rounded-[2em]"
                    src="./img/1.jpg" alt="Image 2">

                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-slate-900/80 opacity-0 scale-150
                    group-hover:opacity-100 group-hover:scale-100 transition-all">
                    <p class="w-4/5 text-white text-center">
                        <span class="font-semibold">Cloud-Based Networked Lighting Controls</span>
                        <br>Monitor, regulate, and optimize your facility's lighting remotely with our cloud-based platform for improved efficiency and cost savings.
                    </p>
                </div>
            </div>
        </div>
        <div class="gap-4 flex flex-col">
            <div class="relative rounded-[2em] overflow-hidden group">
                <img class="w-full aspect-[9/16] object-cover rounded-[2em]"
                    src="./img/3.jpg" alt="Image 3">

                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-slate-900/80 opacity-0 scale-150
                    group-hover:opacity-100 group-hover:scale-100 transition-all">
                    <p class="w-4/5 text-white text-center">
                        <span class="font-semibold">Comprehensive Energy Assessment</span>
                        <br>We analyze your current operations and energy consumption to identify opportunities for efficiency improvements.
                    </p>
                </div>
            </div>
            <div class="relative rounded-[2em] overflow-hidden group">
                <img class="w-full aspect-square object-cover rounded-[2em]"
                    src="./img/4.jpg" alt="Image 4">

                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-slate-900/80 opacity-0 scale-150
                    group-hover:opacity-100 group-hover:scale-100 transition-all">
                    <p class="w-4/5 text-white text-center">
                        <span class="font-semibold">Customized Efficiency Strategy</span>
                        <br>Our team provides data-driven recommendations with cost and energy-saving models tailored to your facility.
                    </p>
                </div>
            </div>
        </div>
        <div class="gap-4 flex flex-col">
            <div class="relative rounded-[2em] overflow-hidden group">
                <img class="w-full aspect-square object-cover rounded-[2em]"
                    src="./img/9.jpg" alt="Image 5">

                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-slate-900/80 opacity-0 scale-150
                    group-hover:opacity-100 group-hover:scale-100 transition-all">
                    <p class="w-4/5 text-white text-center">
                        <span class="font-semibold">Seamless Implementation & Upgrades</span>
                        <br>We handle project scheduling, installation, system upgrades, and commissioning for a smooth transition.
                    </p>
                </div>
            </div>
            <div class="relative rounded-[2em] overflow-hidden group">
                <img class="w-full aspect-[9/16] object-cover rounded-[2em]"
                    src="./img/8.jpg" alt="Image 6">

                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-slate-900/80 opacity-0 scale-150
                    group-hover:opacity-100 group-hover:scale-100 transition-all">
                    <p class="w-4/5 text-white text-center">
                        <span class="font-semibold">Full-Service Maintenance & Support</span>
                        <br>All hardware and maintenance services are covered under contract at no additional cost throughout the agreement term.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full mb-16 flex flex-col items-center justify-center gap-4">
        <p class="w-3/4 text-center text-3xl font-bold">
            Let us help you earn immediate savings and energy efficiency. Contact us today to set up a consultation this week.
        </p>

        <a class="w-fit px-8 py-2 rounded-full text-xl bg-slate-900 font-semibold text-lime-300 active:bg-slate-700 transition-colors"
            href="./contact.html">Contact Us</a>
    </div>
@endsection
