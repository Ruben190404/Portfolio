<x-guest-layout>
    <h1 class="text-7xl flex justify-center mt-6" style="font-family: 'Monoton', cursive;">
        Contact
    </h1>
    <div class="flex flex-row justify-around mt-8">
        <section class="bg-zinc-700 rounded-3xl w-1/3"> {{--contact info--}}
            <div>
                <div class="">Contacteer Mij</div> {{--contacteer mij--}}
                <div class="">Om met mij contact op te nemen gebruik één van deze middelen of vul het formulier in.</div> {{--vul formulier in--}}
                <div class=""><img src=""><a href="https://www.linkedin.com/in/ruben-luteijn-52471b220/">https://www.linkedin.com/in/ruben-luteijn-52471b220/</a></div> {{--linkedin--}}
                <div class=""><img src="">+033 6 12390947</div> {{--telefoon nummer--}}
                <div class=""><img src=""><a href="mailto: luteijnruben@gmail.com">luteijnruben@gmail.com</a></div> {{--email--}}
            </div>
        </section>
        <section class="bg-zinc-700 rounded-3xl w-1/3"> {{--contact form met naam, email, telefoon nummer en korte tekst--}}
            <form class="flex flex-col">
                <label for="fname">Voornaam:</label>
                    <input type="text" id="fname" name="fname" placeholder="Voornaam..." class="bg-zinc-600 rounded-2xl"><br>
                <label for="lname">Achternaam:</label>
                    <input type="text" id="lname" name="lname" placeholder="Achternaam..."><br>
                <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email Adres..."><br>
                <label for="tel">Telefoonnummer:</label>
                    <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer... (niet verplicht)"><br>
                <label for="text"></label><br>
                    <input type="text" id="text" name="text">
                    <input type="submit" class="rounded-full ... bg-teal-400 h-8 w-40 text-white text-s
                              hover:bg-teal-600 mb-4">
            </form>
        </section>
    </div>
</x-guest-layout>
