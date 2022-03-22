<x-guest-layout>
    <h1 class="text-7xl flex justify-center mt-6" style="font-family: 'Monoton', cursive;">
        Projecten
    </h1>
    <section class="w-4/5 h-96 flex ml-auto mt-8">
        @foreach($projects AS $project)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/images/projectsHP/{{$project->picture}}">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$project->title}}</div>
                    <p class="text-gray-700 text-base">
                        {{$project->description}}</p>
                </div>
                <div class="px-6 pt-4 pb-2"> {{--verander naar talen--}}
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
        @endforeach
    </section>
</x-guest-layout>
