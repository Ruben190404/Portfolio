<x-guest-layout>
    <h1 class="text-7xl flex justify-center mt-6" style="font-family: 'Monoton', cursive;">
        Contact
    </h1>
    <div class="flex flex-row justify-around mt-8">
        <section class="bg-white rounded-3xl w-1/3 shadow-lg"> {{--contact info--}}
            <div>
                <div class="">Contacteer Mij</div> {{--contacteer mij--}}
                <div class="">Om met mij contact op te nemen gebruik één van deze middelen of vul het formulier in.</div> {{--vul formulier in--}}
                <div class=""><img src=""><a href="https://www.linkedin.com/in/ruben-luteijn-52471b220/">https://www.linkedin.com/in/ruben-luteijn-52471b220/</a></div> {{--linkedin--}}
                <div class=""><img src="">+033 6 12390947</div> {{--telefoon nummer--}}
                <div class=""><img src=""><a href="mailto: luteijnruben@gmail.com">luteijnruben@gmail.com</a></div> {{--email--}}
            </div>
        </section>
        <section class="bg-white shadow-lg rounded-3xl w-1/3"> {{--contact form met naam, email, telefoon nummer en korte tekst--}}
            <form class="flex flex-col items-center">
                <label for="fname">Voornaam:</label>
                    <input type="text" id="fname" name="fname" placeholder="Voornaam..." class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                <label for="lname">Achternaam:</label>
                    <input type="text" id="lname" name="lname" placeholder="Achternaam..." class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email Adres..." class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                <label for="tel">Telefoonnummer:</label>
                    <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer..." class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                <label for="text">Bericht</label>
                <textarea id="text" name="text" placeholder="Typ bericht..." class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2 h-40"></textarea>
                    <input type="submit" class="bg-blue-500 hover:bg-blue-400 w-36 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mt-1">
            </form>
        </section>
    </div>
</x-guest-layout>
