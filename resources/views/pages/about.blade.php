@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="w-full flex items-center justify-center gap-8">
        <div class="w-full">
            <img class="w-full aspect-square object-cover rounded-[2em]"
                src="{{ asset('img/7.jpg') }}" alt="Main Image">
        </div>

        <div class="w-full">
            <div class="mb-8">
                <p class="text-xl font-semibold">Light - Up</p>
                <h2 class="text-[3em] font-bold">
                    Energy Efficiency <br> Commercial Building
                </h2>
                <p class="mb-4 text-[1em]">
                    GreenTech Solutions Group, founded in 2009, is a full-service consulting firm specializing in energy efficiency solutions that reduce consumption, conserve resources, and optimize return on investment.
                </p>
                <a class="w-fit px-8 py-2 rounded bg-slate-900 font-semibold text-lime-300 text-sm active:bg-slate-700 transition-colors"
                    href="{{ url('/services') }}">
                    Our Services
                </a>
            </div>
        </div>
    </div>
@endsection
