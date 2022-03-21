<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik&display=swap" rel="stylesheet">
    <link rel="icon" href="images/icon.png">
</head>
<body class="flex flex-col bg-zinc-800 text-white h-screen font-sans" style="font-family: 'Rubik', sans-serif;">
    <header class="flex flex-row justify-between py-3.5 bg-zinc-900 content-center container px-40">
        <a href="/"><img class="w-14 h-auto" src="images/logo.png"></a>
        <ul class="flex justify-between w-3/5 flex md:flex-0">
            <a href="projects" class="self-center">
                <button class="rounded-full ... bg-teal-400 h-10 w-48 text-white
                          hover:bg-zinc-800 hover:border-4 hover:border-teal-200
                          active:bg-zinc-800 active:outline-teal-200">Projecten
                </button>
            </a>
            <a href="contact" class="self-center">
                <button class="rounded-full ... bg-teal-400 h-10 w-48 text-white
                          hover:bg-zinc-800 hover:border-4 hover:border-teal-200
                          active:bg-zinc-800 active:outline-teal-200">Contact
                </button>
            </a>
            <a href="about-me" class="self-center">
                <button class="rounded-full ... bg-teal-400 h-10 w-48 text-white
                          hover:bg-zinc-800 hover:border-4 hover:border-teal-200
                          active:bg-zinc-800 active:outline-teal-200">Over Mij
                </button>
            </a>
        </ul>
    </header>
    <div class="flex-grow">
        {{ $slot }}
    </div>
    <footer class="text-center flex flex-col h-full justify-end">
        <div class="text-base"> Copyright ©<?php $copyYear = 2004;
                                                 $curYear = date('Y');
                                                 echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                                                 ?> Ruben luteijn. All Rights Reserved</div>
        <a href="donate" class="self-center">
            <button class="rounded-full ... bg-teal-400 h-8 w-40 text-white text-s
                          hover:bg-teal-600 mb-4">Doneer
            </button>
        </a>
    </footer>
</body>
</html>
