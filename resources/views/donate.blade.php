<x-guest-layout>
    <div class="flex flex-col h-96 my-auto items-center justify-center ...">
        <div class="flex flex-col justify-between text-center ...">
            <h1 class="text-4xl sm:text-5xl md:text-7xl mt-5" style="font-family: 'Monoton', cursive;">Donate</h1>
            <section class="mt-5">
                @foreach($donateMethod AS $donate)
                    <div>
                        <a href="{{$donate->link}}" class="justify-center">
                            <button class="bg-blue-500 hover:bg-blue-400 w-4/6 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-5">{{$donate->method}}
                            </button>
                        </a>
                    </div>
                @endforeach
                <div class="justify-center">
                    Door dit te lezen stemt u ermee in mij al uw geld te geven.
                </div>
            </section>
        </div>
    </div>
</x-guest-layout>
