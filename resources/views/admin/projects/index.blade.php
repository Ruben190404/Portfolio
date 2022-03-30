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
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left">ID</th>
                                <th class="text-left">Title</th>
                                <th class="text-left">Description</th>
                                <th class="text-left">Image</th>
                                <th class="text-left">Languages</th>
                                <th class="text-left">Opties</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{$project->description}}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $project->picture) }}" alt="" width="100">
                                    <td>
                                        @foreach($project->languages as $language)
                                            {{ $language->title }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.projects.edit', ['project' => $project]) }}">Bewerken</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.projects.delete', ['project'  => $project]) }}" method="post">
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
