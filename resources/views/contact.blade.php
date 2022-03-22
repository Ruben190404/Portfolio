<x-guest-layout>
    <h1 class="text-7xl flex justify-center mt-6" style="font-family: 'Monoton', cursive;">
        Contact
    </h1>
    <section class="bg-zinc-700"> {{--contact info--}}
        <div>
            <div class="">Contacteer Mij</div> {{--contacteer mij--}}
            <div class="">Om met mij contact op te nemen gebruik één van deze middelen of vul het formulier in.</div> {{--vul formulier in--}}
            <div class=""><img src=""><a href="https://www.linkedin.com/in/ruben-luteijn-52471b220/">https://www.linkedin.com/in/ruben-luteijn-52471b220/</a></div> {{--linkedin--}}
            <div class=""><img src="">+033 6 12390947</div> {{--telefoon nummer--}}
            <div class=""><img src=""><a href="mailto: luteijnruben@gmail.com">luteijnruben@gmail.com</a></div> {{--email--}}
        </div>
    </section>
    <section class="bg-zinc-700"> {{--contact form met naam, email, telefoon nummer en korte tekst--}}
        <form>
            <label for="fname">Voornaam:</label><br>
                <input type="text" id="fname" name="fname" placeholder="Voornaam..." class="bg-zinc-600 rounded-2xl"><br>
            <label for="lname">Achternaam:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Achternaam..."><br>
            <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="Email Adres..."><br>
            <label for="tel">Telefoonnummer:</label><br>
                <input type="tel" id="tel" name="tel" placeholder="Telefoonnummer... (niet verplicht)"><br>
            <label for="text"></label><br>
                <input type="text" id="text" name="text">
                <input type="submit">
        </form>
    </section>
</x-guest-layout>
