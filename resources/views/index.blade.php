<x-guest-layout>
<section>
    <h1 class="text-7xl mt-8 flex justify-center" style="font-family: 'Monoton', cursive;">
        Welkom
    </h1>
    <div class="flex flex-col self-center items-center mt-8">
        <h1 class="self-center ">
            Hallo, ik ben Ruben Luteijn.
        </h1>
        <p class="w-1/3 text-center">
            Ik ben <?php
            //date in mm/dd/yyyy format; or it can be in other formats as well
            $birthDate = "4/19/2004";
            //explode the date to get month, day and year
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                ? ((date("Y") - $birthDate[2]) - 1)
                : (date("Y") - $birthDate[2]));
            echo $age . " jaar oud";
            ?>
            en kom uit Nijkerk. Ik heb vanaf 2016 tot 2021 een VMBO-opleiding gevolgd op het Corlaer College.
            Momenteel doe ik de opleiding Software-Development op Landstede MBO.
            Sinds ik met mijn opleiding ben begonnen heb ik al veel kennis opgedaan.
            Ik heb leren programmeren met verschillende programmeertalen/frameworks.
            Waaronder: HTML, CSS, JavaScript, PHP, Laravel, Bootstrap, Tailwind CSS enSQL.
            Verdere hobbies van mij zijn gamen.
        </p>
    </div>
</section>
</x-guest-layout>
