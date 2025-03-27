@php
    $page = Route::currentRouteName();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | GreenTech Solution Group</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="bg-lime-300">
    <div class="w-full p-8 font-[Quicksand]">
        <header class="w-full">
            <nav class="w-full flex gap-[1px] bg-slate-900 rounded-full border border-slate-900">
                <a class="w-full p-2 flex items-center justify-center {{ $page == 'index' ? 'text-lime-300 bg-slate-900' : 'bg-lime-300 text-slate-900' }} font-semibold outline-none rounded-l-full
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/') }}">HOME</a>
                <a class="w-full p-2 flex items-center justify-center {{ $page == 'about' ? 'text-lime-300 bg-slate-900' : 'bg-lime-300 text-slate-900' }} font-semibold outline-none
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/about') }}">ABOUT</a>
                <a class="w-full p-2 flex items-center justify-center {{ $page == 'services' ? 'text-lime-300 bg-slate-900' : 'bg-lime-300 text-slate-900' }} font-semibold outline-none
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/services') }}">SERVICES</a>
                <a class="w-full p-2 flex items-center justify-center {{ $page == 'contact' ? 'text-lime-300 bg-slate-900' : 'bg-lime-300 text-slate-900' }} font-semibold outline-none rounded-r-full
                    hover:bg-slate-900 hover:text-lime-300 focus:bg-slate-900 focus:text-lime-300
                    active:bg-slate-700 transition-colors"
                    href="{{ url('/contact') }}">CONTACT</a>
            </nav>
        </header>

        <section class="w-full p-8">
            @yield('content')
        </section>
    </div>
</body>
</html>
