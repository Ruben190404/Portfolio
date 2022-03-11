<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-zinc-800 text-white">
    <header class="flex flex-row justify-between h-16 bg-zinc-900 content-center container px-40">
            <div>[logo]</div>
            <ul class="flex justify-between w-3/5 mr-2">
                <a href="projects" class="self-center duration-75 ease-out ...">
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
                          active:bg-zinc-800 active:outline-teal-200">Projecten
                    </button>
                </a>
            </ul>
    </header>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>
</html>
