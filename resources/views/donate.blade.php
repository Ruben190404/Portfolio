<x-guest-layout>
    <div class="flex flex-col h-96 my-auto items-center justify-center ...">
        <div class="flex flex-col justify-between text-center ...">
            <h1 class="text-7xl mt-5" style="font-family: 'Monoton', cursive;">Donate</h1>
            <section class="mt-5">
                <div> {{--paypal--}}
                    <a href="https://paypal.me/rluteijn0253?country.x=NL&locale.x=nl_NL" class="justify-center">
                        <button class="rounded-full ... bg-teal-400 h-12 w-5/6 md:w-64 text-white
                                       hover:bg-zinc-800 hover:border-4 hover:border-teal-200
                                       active:bg-zinc-800 active:outline-teal-200 mb-5">Paypal
                        </button>
                    </a>
                </div>
                <div> {{--ko-fi--}}
                    <a href="https://ko-fi.com/rubenluteijn">
                        <button class="rounded-full ... bg-teal-400 h-12 w-64 text-white
                                       hover:bg-zinc-800 hover:border-4 hover:border-teal-200
                                       active:bg-zinc-800 active:outline-teal-200 mb-5 ">Ko-Fi
                        </button>
                    </a>
                </div>
                <div>{{--patreon--}}
                    <a href="https://www.patreon.com/rluteijn0253" class="justify-center">
                        <button class="rounded-full ... bg-teal-400 h-12 w-64 text-white
                                       hover:bg-zinc-800 hover:border-4 hover:border-teal-200
                                       active:bg-zinc-800 active:outline-teal-200 mb-5 ">Patreon
                        </button>
                    </a>
                </div>
                <div>{{--GoFundMe--}}
                    <a href="https://gofund.me/08a1559d" class="justify-center">
                        <button class="rounded-full ... bg-teal-400 h-12 w-64 text-white
                                       hover:bg-zinc-800 hover:border-4 hover:border-teal-200
                                       active:bg-zinc-800 active:outline-teal-200 mb-5 ">GoFundMe
                        </button>
                    </a>
                </div>
                <div class="justify-center">
                    By reading this you agree to give me all your money.
                </div>
            </section>
        </div>
    </div>
</x-guest-layout>
