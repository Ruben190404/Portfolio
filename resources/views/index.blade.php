<x-guest-layout>
    <div class="flex justify-center mt-16">
        <section class="bg-white w-3/4 sm: md:w-3/5 lg:w-2/5 h-auto p-16 shadow-lg">
            <h1 class="text-4xl sm:text-5xl md:text-7xl flex justify-center font-monoton">
                Welkom
            </h1>
            <div class="flex flex-col self-center items-center mt-8">
                <h1 class="self-center ">
                    Hallo, ik ben Ruben Luteijn.
                </h1>
                <p class="text-center">
                    Ik ben {{ \App\Http\Controllers\Controller::age() }}
                    en kom uit Nijkerk. Ik heb vanaf 2016 tot 2021 een VMBO-opleiding gevolgd op het Corlaer College.
                    Momenteel doe ik de opleiding Software-Development op Landstede MBO.
                    Sinds ik met mijn opleiding ben begonnen heb ik al veel kennis opgedaan.
                    Ik heb leren programmeren met verschillende programmeertalen/frameworks.
                    Waaronder: HTML, CSS, JavaScript, PHP, React, C#, Laravel, Bootstrap, Tailwind CSS en SQL.
                </p>
            </div>
        </section>
    </div>
</x-guest-layout>
