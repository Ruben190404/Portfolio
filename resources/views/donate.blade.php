<x-guest-layout>
    <div class="flex flex-col h-96 my-auto items-center justify-center ...">
        <div class="flex flex-col justify-between text-center ...">
            <h1 class="text-7xl mt-5" style="font-family: 'Monoton', cursive;">Donate</h1>
            <section class="mt-5">
                @foreach($donationMethod AS $donate)
                    <div>
                        <a href="{{$donate->link}}" class="justify-center">
                            <button class="bg-blue-500 hover:bg-blue-400 w-4/6 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-5">{{$donate->method}}
                            </button>
                        </a>
                    </div>
                @endforeach
                <div>
                    <a href="https://paypal.me/rluteijn0253?country.x=NL&locale.x=nl_NL" class="justify-center">
                        <button class="bg-blue-500 hover:bg-blue-400 w-4/6 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-5">Paypal
                        </button>
                    </a>
                </div>
                <div>
                    <a href="https://ko-fi.com/rubenluteijn">
                        <button class="bg-blue-500 hover:bg-blue-400 w-4/6 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-5">Ko-Fi
                        </button>
                    </a>
                </div>
                <div>
                    <a href="https://www.patreon.com/rluteijn0253" class="justify-center">
                        <button class="bg-blue-500 hover:bg-blue-400 w-4/6 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-5">Patreon
                        </button>
                    </a>
                </div>
                <div>
                    <a href="https://gofund.me/08a1559d" class="justify-center">
                        <button class="bg-blue-500 hover:bg-blue-400 w-4/6 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-5">GoFundMe
                        </button>
                    </a>
                </div>
                <div class="justify-center">
                    Door dit te lezen stemt u ermee in mij al uw geld te geven.
                </div>
            </section>
        </div>
    </div>
</x-guest-layout>
