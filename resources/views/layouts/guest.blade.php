<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="light only">
    <meta name="keywords" content="Portfolio, Ruben Luteijn, HTML, CSS, PHP, JavaScript">
    <meta name="description" content="Portfolio of Ruben Luteijn">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik&display=swap" rel="stylesheet">
    <link rel="icon" href="images/icon.png">
    <link rel="apple-touch-icon" href="images/icon.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Hotjar Tracking Code for https://ruben.luteijn.dev -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3650483,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-793BX4HXMR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-793BX4HXMR');
    </script>
</head>
<body class="flex flex-col h-screen bg-gray-50 font-sans" style="font-family: 'Rubik', sans-serif;">
<nav class=" md:flex md:justify-between bg-white py-3.5 content-center px-10 shadow-lg">
    <div class="flex flex-row justify-between">
        <a href="/">
            <img class="w-16 h-auto" src="images/icon.png" alt="logo">
        </a>
        <div class="my-auto  md:hidden">
            <button type="button" id="togglemenu">
                <svg class="h-10 w-10 fill-current" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>
        </div>
    </div>
    <div id="nav" class="hidden md:flex flex-col md:flex-row md:justify-between items-center w-4/6 text-center mx-auto">
        <a href="/"
           class="bg-blue-500 hover:bg-blue-400 w-32 lg:w-44 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md my-2">Home</a>
        <a href="projects"
           class="bg-blue-500 hover:bg-blue-400 w-32 lg:w-44 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md my-2">Projecten</a>
        <a href="contact"
           class="bg-blue-500 hover:bg-blue-400 w-32 lg:w-44 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md my-2">Contact</a>
    </div>
</nav>
<div class="flex-grow">
    @if(session('status'))
        <div
            class="bg-blue-500 text-white text-center py-2 px-4 border-b-4 border-blue-700 rounded-md my-2 w-72 mx-auto"
            id="timeClose">
            {{ session('status') }}
        </div>
    @endif
    {{ $slot }}
</div>
<footer class="text-center flex flex-col h-full justify-end mt-6 px-4 sm:px">
    <div class="text-base"> Copyright © {{ \App\Http\Controllers\Controller::copyright() }} Ruben luteijn. All Rights
        Reserved
    </div>
    <a href="donate" class="self-center">
        <button
            class="bg-blue-500 hover:bg-blue-400 w-36 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-2">
            Doneer
        </button>
    </a>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
