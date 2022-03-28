<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Projects
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="" method="post">
                        @csrf
                        <input type="text" name="title" placeholder="Titel" value="{{ $project->title }}">
                        <input type="text" name="description" placeholder="Beschrijving" value="{{ $project->description }}">
                        <img src="{{ asset('images/projectsHP/' . $project->picture) }}" alt="" class="w-96 h-auto">
                        <input type="file" name="image">
                        @foreach( $langs as $language )
                            <input type="checkbox" @if (in_array($language->id, $project->languages->pluck('id')->toArray())) checked @endif name="language" value="{{ $language->id }}" >
                            <label for="{{$language->id}}">{{ $language->title }}</label>
                        @endforeach
                        <button type="submit">Opslaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
