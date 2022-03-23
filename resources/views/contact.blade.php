<x-guest-layout>
    <h1 class="text-7xl flex justify-center mt-4" style="font-family: 'Monoton', cursive;">
        Contact
    </h1>
    <div class="flex flex-row justify-around mt-3">
        <section class="bg-white w-1/3 h-auto shadow-lg p-8 flex flex-col justify-evenly">
                <div class="text-4xl">Contact Middelen</div>
                <div class="text-xl flex flex-row items-center"><img src="images/lnkdin.png" class="h-auto w-12 mr-4"><a href="https://www.linkedin.com/in/ruben-luteijn-52471b220/">https://www.linkedin.com/rluteijn</a></div>
                <div class="text-xl flex flex-row items-center"><img src="images/phone.png" class="h-auto w-12 mr-4">+033 6 12390947</div>
                <div class="text-xl flex flex-row items-center"><img src="images/mail.png" class="h-auto w-12 mr-4"><a href="mailto: luteijnruben@gmail.com">luteijnruben@gmail.com</a></div>
        </section>
        <section class="bg-white shadow-lg w-1/3 h-auto p-6">
            <form class="ml-8">
                <div class="text-3xl">Laat je contact info achter.</div><br>
                <label for="fname" class="text-gray-700 text-lg font-medium w-1/2">Voornaam:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="Voornaam..." class="w-3/4 h-10 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                <label for="lname" class="text-gray-700 text-lg font-medium w-1/2">Achternaam:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Achternaam..." class="w-3/4 h-10 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                <label for="email" class="text-gray-700 text-lg font-medium w-1/2">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Email Adres..." class="w-3/4 h-10 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                <label for="tel" class="text-gray-700 text-lg font-medium w-1/2">Telefoonnummer:</label><br>
                    <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer..." class="w-3/4 h-10 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none w-1/2"><br>
                    <input type="submit" class="bg-blue-500 hover:bg-blue-400 w-36 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mt-1">
            </form>
        </section>
    </div>
</x-guest-layout>
