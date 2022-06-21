<x-guest-layout>
    <h1 class="text-4xl sm:text-5xl md:text-7xl  flex justify-center mt-4 font-monoton">
        Contact
    </h1>
    <div class="flex flex-col lg:flex-row justify-around mt-3">
        <section class="bg-white w-4/6 h-96 lg:h-full mx-auto mb-10 shadow-lg p-8 flex flex-col justify-evenly lg:mx-8">
            <div class="text-4xl lg:mb-12">Contact Middelen</div>
            <div class="text-xxs sm:text-xl lg:text-xl lg:mb-6 flex flex-row items-center">
                <img src="images/lnkdin.png" class="h-auto w-12 mr-4" alt="linkedin logo">
                <a href="https://www.linkedin.com/in/ruben-luteijn-52471b220/">https://www.linkedin.com/rluteijn</a>
            </div>
            <div class="text-xxs sm:text-xl lg:text-xl lg:mb-6 flex flex-row items-center">
                <img src="images/phone.png" class="h-auto w-12 mr-4" alt="phone image">
                +033 6 12390947
            </div>
            <div class="text-xxs sm:text-xl lg:text-xl lg:mb-6 flex flex-row items-center">
                <img src="images/mail.png" class="h-auto w-12 mr-4" alt="mail icon">
                <a href="mailto: luteijnruben@gmail.com">luteijnruben@gmail.com</a></div>
        </section>
        <section class="bg-white shadow-lg w-4/6 mx-auto h-full p-6 lg:mx-8">
            <form class="ml-8" method="post" action="{{route('admin.contacts.store')}}">
                @csrf
                <div class="text-3xl">Laat je contact info achter.</div>
                <br>
                <label for="voornaam" class="text-gray-700 text-lg font-medium w-1/2">Voornaam:</label><br>
                <input type="text" name="voornaam" placeholder="John"
                       class="w-5/6 h-10 mt-px mb-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none"><br>

                @error('voornaam')
                <div
                    class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-80 rounded relative">{{ $message }}</div>
                @enderror

                <label for="achternaam" class="text-gray-700 text-lg font-medium w-1/2">Achternaam:</label><br>
                <input type="text" name="achternaam" placeholder="Doe"
                       class="w-5/6 h-10 mt-px mb-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none "><br>
                @error('achternaam')
                <div
                    class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-80 rounded relative">{{ $message }}</div>
                @enderror
                <label for="email-adres" class="text-gray-700 text-lg font-medium w-1/2">Email:</label><br>
                <input type="email" name="email-adres" placeholder="johndoe@gmail.com"
                       class="w-5/6 h-10 mt-px mb-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none"><br>
                @error('email-adres')
                <div
                    class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-80 rounded relative">{{ $message }}</div>
                @enderror
                <label for="telefoonnummer" class="text-gray-700 text-lg font-medium w-1/2">Telefoonnummer:</label><br>
                <input type="text" name="telefoonnummer" placeholder="0613371271"
                       class="w-5/6 h-10 mt-px mb-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-medium focus:border-indigo-500 focus:outline-none"><br>
                @error('telefoonnummer')
                <div
                    class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-80 rounded relative">{{ $message }}</div>
                @enderror
                <input type="submit"
                       class="bg-blue-500 hover:bg-blue-400 w-36 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mt-1">
            </form>
        </section>
    </div>
</x-guest-layout>
