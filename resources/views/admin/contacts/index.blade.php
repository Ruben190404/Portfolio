<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contacten
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
                            <th class="text-left">Naam</th>
                            <th class="text-left">TelefoonNummer</th>
                            <th class="text-left">Email</th>
                            <th class="text-left">Opties</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td class="text-left">{{ $contact->id }}</td>
                                <td>{{ $contact->firstName}} {{$contact->lastName}}</td>
                                <td>{{ $contact->phonenumber }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>
                                    <form action="{{ route('admin.contacts.destroy', ['contact'  => $contact]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
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
