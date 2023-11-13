<x-guest-layout>
    <h1 class="text-5xl sm:text-6xl md:text-7xl flex justify-center mt-6 font-monoton">
        Projecten heel niet
    </h1>
    <section class="mx-auto w-40">
        <button type="button" id="toggleFilter" class="flex flex-row rounded border p-1 w-full border-black mt-8">
            Filteren op taal.
            <img src="{{ asset('images/arrow-down.svg') }}" alt="arrow down" class="w-4 h-4 ml-2 my-auto"
                 id="arrow-down">
            <img src="{{ asset('images/arrow-up.svg') }}" alt="arrow up" class="w-4 h-4 ml-2 my-auto hidden"
                 id="arrow-up">
        </button>
        <form action="{{ route('projects') }}" method="post"
              class="flex flex-col hidden border border-x-black border-b-black rounded-b" id="filter">
            @csrf
            @foreach($languages as $language)
                <div class="flex flex-row justify-between">
                    <input type="checkbox" @if (in_array($language->id, $selected)) checked @endif name="language[]"
                           class="rounded my-auto ml-1" id="{{ $language->id }}" value="{{ $language->id }}">
                    <label for="{{ $language->id }}" class="w-24">{{$language->title}}</label>
                </div>
            @endforeach

            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-400 w-20 mx-auto text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-2">
                Filter
            </button>
        </form>
    </section>
    <section class="w-4/5 h-auto flex mx-auto mt-8 flex-wrap justify-evenly">
        @foreach($projects AS $project)
            <div
                class="max-w-sm rounded overflow-hidden shadow-lg bg-white w-full sm:w-2/5 md:w-3/6 mr-px mb-6 sm:mb-16">
                <img class="w-full" src="{{ asset('storage/public/' . $project->picture) }}" alt="project website foto html">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$project->title}}</div>
                    <p class="text-gray-700 text-base">
                        {{$project->description}}</p>
                </div>
                <div class="px-6 pt-4 pb-2"> {{--verander naar talen--}}
                    @foreach($project->languages AS $language)
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$language->title}}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </section>
</x-guest-layout>
