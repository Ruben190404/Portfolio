<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Taal toevoegen
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-96">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="mx-auto mb-2">Taal Toevoegen</div>
                        <form action="{{ route('admin.languages.store') }}" method="post" enctype="multipart/form-data" class="mx-auto flex flex-col mb-2">
                            @csrf
                            <input type="hidden" name="id">
                            <input type="text" name="titel" placeholder="Titel" class="mb-2">
                            @error('titel')
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-2 w-80 rounded relative">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="border-2 border-indigo-600 ...">Toevoegen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
