<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Donatie Middelen
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('admin.donations.create')}}" class="flex justify-center mb-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Voeg donatie middel toe
                        </button>
                    </a>
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Methode</th>
                            <th class="text-left">Link</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($donations as $donation)
                            <tr>
                                <td>{{ $donation->id }}</td>
                                <td>{{ $donation->method }}</td>
                                <td>{{ $donation->link }}</td>
                                <td><a href="{{ route('admin.donations.edit', ['donation' => $donation]) }}">Bewerken</a></td>
                                <td>
                                    <form action="{{ route('admin.donations.destroy', ['donation'  => $donation]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $donation->id }}">
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
