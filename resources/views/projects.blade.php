<x-guest-layout>
    <h1 class="text-4xll sm:text-5xl md:text-7xl flex justify-center mt-6 shrink w-auto h-auto" style="font-family: 'Monoton', cursive;">
        Projecten
    </h1>
    <section class="w-4/5 h-auto flex mx-auto mt-8 flex-wrap justify-evenly">
        @foreach($projects AS $project)
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white w-full sm:w-1/3 md:w-1/4 mr-px mb-16">
                <img class="w-full" src="/images/projectsHP/{{$project->picture}}">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$project->title}}</div>
                    <p class="text-gray-700 text-base">
                        {{$project->description}}</p>
                </div>
                <div class="px-6 pt-4 pb-2"> {{--verander naar talen--}}
                    @foreach($project->languages AS $language)
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$language->title}}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>
</x-guest-layout>
