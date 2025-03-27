@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="text-center">
        <h1 class="text-[10rem] text-slate-900 font-semibold">404</h1>
        <p class="mb-4">Maaf, halaman yang Anda cari tidak tersedia.</p>
        <a class="w-fit px-8 py-2 mx-auto block rounded-md bg-slate-900 text-lime-300 font-semibold active:bg-slate-700 transition-colors"
            href="{{ url('/') }}">Kembali ke Beranda</a>
    </div>
@endsection
