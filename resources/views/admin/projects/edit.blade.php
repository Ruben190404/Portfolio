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
                    <div class="flex flex-col">
                        <div class="mx-auto mb-2">Project Bewerken</div>
                        <form action="" method="post" enctype="multipart/form-data" class="mx-auto flex flex-col mb-2">
                            @csrf
                            <input type="hidden" name="id" value="{{ $project->id }}">
                            <input type="text" name="title" placeholder="Titel" value="{{ $project->title }}" class="mb-2">
                            <input type="text" name="description" placeholder="Beschrijving" value="{{ $project->description }}" class="mb-2">
                            <img src="{{ asset('images/projectsHP/' . $project->picture) }}" alt="" class="w-96 h-auto mx-auto mb-2">
                            <input type="file" name="image" class="mb-2">
                            <div class="flex flex-col mb-2">
                                @foreach( $langs as $language )
                                        <div class="flex flex-row justify-between">
                                            <label for="{{$language->id}}">{{ $language->title }}:</label>
                                            <input type="checkbox" @if (in_array($language->id, $project->languages->pluck('id')->toArray())) checked @endif name="languages[]" value="{{ $language->id }}" >
                                        </div>
                                @endforeach
                            </div>
                            <button type="submit" class="border-2 border-indigo-600 ...">Opslaan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
