<x-app-layout>
<div class="container">
    <x-slot name="header">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex justify-between">Patients   
            @if(auth()->user()->profile_type !== "infirmiere")
            <a href="{{ route('patients.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white-300" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 2a.75.75 0 01.75.75V9H18a.75.75 0 010 1.5H10v6.25a.75.75 0 01-1.5 0V10H1.75a.75.75 0 010-1.5H9V2.75A.75.75 0 0110 2z" clip-rule="evenodd" />
                </svg>
            </a>
        @endif
        
        </h5>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">CIN</th>
                <th scope="col" class="px-6 py-3">Nom</th>
                <th scope="col" class="px-6 py-3">Prénom</th>
                @if(auth()->user()->profile_type !== "infirmiere")

                <th scope="col" class="px-6 py-3">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $patient->id }}</td>
                <td class="px-6 py-4">{{ $patient->cin }}</td>
                <td class="px-6 py-4">{{ $patient->nom }}</td>
                <td class="px-6 py-4">{{ $patient->prenom }}</td>
                @if(auth()->user()->profile_type !== "infirmiere")

                <td class="px-6 py-4">
                    <a href="{{ route('patients.show', $patient) }}" style="color: green" class="btn btn-info ">View</a>
                    <a href="{{ route('patients.edit', $patient) }}"  style="color: blue" class="btn btn-primary">Edit</a>
                    <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red" class="" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </x-slot>
    

    
    

    
</div>
</x-app-layout>
