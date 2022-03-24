<x-guest-layout>
    <h1 class="text-4xl sm:text-5xl md:text-7xl flex flex-col justify-center mt-8" style="font-family: 'Monoton', cursive;">
        <div class="mx-auto">Contact</div>
        <div class="mx-auto">Dashboard</div>
    </h1>
    <div class="flex flex-col w-5/6 mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Naam
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Telefoonnummer
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Verwijderen
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts AS $contact)
                            <tr class="bg-gray-100 border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$contact->id}}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$contact->firstName}} {{$contact->lastName}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    06 {{$contact->phonenumber}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$contact->email}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <button class="bg-blue-500 hover:bg-blue-400 w-3/6 text-white font-medium py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mb-5">Verwijder</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
