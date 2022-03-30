<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Taal bewerken
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="mx-auto mb-2">Taal Bewerken</div>
                        <form action="{{ route('admin.languages.update', ['language' => $language]) }}" method="post" enctype="multipart/form-data" class="mx-auto flex flex-col mb-2">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{ $language->id }}">
                            <input type="text" name="title" placeholder="Titel" value="{{ $language->title }}" class="mb-2">
                            <button type="submit" class="border-2 border-indigo-600 ...">Opslaan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
