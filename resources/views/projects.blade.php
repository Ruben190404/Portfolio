<x-guest-layout>
    <h1 class="text-7xl flex justify-center mt-6" style="font-family: 'Monoton', cursive;">
        Projecten
    </h1>
    <section>

    </section>
    <section class="w-4/5 h-96 flex ml-auto mt-8">
        @foreach($projects AS $project)
            <div class="bg-zinc-700 rounded-3xl w-1/4 flex flex-col items-center mr-4">
                <img src="images/projectsHP/{{$project->picture}}" class="rounded-3xl w-4/5 mt-4 h-52">
                <div class="text-lg font-medium">
                    {{$project->title}}
                </div>
                <div>
                    {{$project->description}}
                </div>
            </div>
        @endforeach
    </section>
</x-guest-layout>
