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
<body class="flex flex-col h-screen bg-gray-50 font-sans" style="font-family: 'Rubik', sans-serif;">
    <header class="flex flex-row justify-between bg-white py-3.5 content-center px-40 shadow-lg">
        <a href="/"><img class="w-14 h-auto" src="images/icon.png"></a>
        <ul class="flex justify-between w-3/5 flex md:flex-0">
            <a href="/" class="self-center">
                <button class="bg-blue-500 hover:bg-blue-400 w-48 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md">Home
                </button>
            </a>
            <a href="projects" class="self-center">
                <button class="bg-blue-500 hover:bg-blue-400 w-48 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md">Projecten
                </button>
            </a>
            <a href="contact" class="self-center">
                <button class="bg-blue-500 hover:bg-blue-400 w-48 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md">Contact
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
            <button class="bg-blue-500 hover:bg-blue-400 w-36 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-1">Doneer
            </button>
        </a>
    </footer>
</body>
</html>
