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
                    <a href="{{ route('admin.projects.create')}}" class="flex justify-center mb-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Voeg project toe
                        </button>
                    </a>
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left">ID</th>
                                <th class="text-left">Titel</th>
                                <th class="text-left">Beschrijving</th>
                                <th class="text-left">Foto</th>
                                <th class="text-left">Talen</th>
                                <th class="text-left">Opties</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td class="break-all">{{$project->description}}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $project->picture) }}" alt="" class="w-24">
                                    <td>
                                        @foreach($project->languages as $language)
                                            {{ $language->title }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.projects.edit', ['project' => $project]) }}">Bewerken</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.projects.destroy', ['project'  => $project]) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $project->id }}">
                                            <button type="submit">Verwijderen</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
