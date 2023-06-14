<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Project Bewerken
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-80">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="mx-auto mb-2">Project Bewerken</div>
                        <form action="{{ route('admin.projects.update', ['project' => $project]) }}" method="post" enctype="multipart/form-data" class="mx-auto flex flex-col mb-2">
                            @method('PUT')
                            @csrf
                            <input type="text" name="title" placeholder="Titel" value="{{ $project->title }}" class="mb-2">
                            <input type="text" name="description" placeholder="Beschrijving" value="{{ $project->description }}" class="mb-2">
                            <img src="{{ asset('storage/public/' . $project->picture) }}" alt="" class="w-96 h-auto mx-auto mb-2">
                            <input type="file" name="image" class="mb-2">
                            <div class="flex flex-col mb-2">
                                @foreach( $languages as $language )
                                        <div class="flex flex-row justify-between">
                                            <label for="{{$language->id}}">{{ $language->title }}:</label>
                                            <input type="checkbox" @if (in_array($language->id, $project->languages->pluck('id')->toArray())) checked @endif name="languages[]" value="{{ $language->id }}" >
                                        </div>
                                @endforeach
                            </div>
                            <div class="flex flex-row justify-between">
                                <label for="active">Active:</label>
                                <input type="checkbox" name="active" @if ($project->active === 1) checked @endif value="1" >
                            </div>
                            <button type="submit" class="border-2 border-indigo-600 ...">Opslaan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
