<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header class="flex justify-between border-b-slate-300">
        <div>[logo]</div>
        <nav class="ml-auto">
            <ul class="flex">
                <li>Knop 1</li>
                <li>Knop 2</li>
                <li>Knop 3</li>
                <li>Knop 4</li>
            </ul>
        </nav>
    </header>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
