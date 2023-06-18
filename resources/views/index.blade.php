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
                    Ik ben {{ \App\Http\Controllers\Controller::age() }} jaar oud en kom uit Nijkerk. Van 2016 tot 2021
                    heb ik een VMBO-opleiding gevolgd aan het Corlaer College. Momenteel volg ik de opleiding
                    Software-Development aan Landstede MBO. Sinds de start van mijn opleiding heb ik al veel kennis
                    opgedaan. Ik heb mij onder andere verdiept in diverse programmeertalen, frameworks en libraries,
                    zoals HTML, CSS, JavaScript, PHP, React, NextJS, C#, Laravel, Bootstrap, Tailwind CSS en SQL.
                    Daarnaast ben ik vertrouwd geraakt met verschillende tools, zoals Git, GitHub, Composer, NPM, Brew
                    en Linux. Thuis heb ik tevens een server draaien waarop ik verschillende projecten host, waaronder
                    deze website.
                </p>
            </div>
        </section>
    </div>
</x-guest-layout>
