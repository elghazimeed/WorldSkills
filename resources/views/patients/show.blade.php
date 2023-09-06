<x-app-layout>

    <div class="container">
        <x-slot name="header">
            <a href="{{ route('patients.index') }}" class="btn btn-primary">Back to List</a>

<div class="flex flex-column gap-4 ">
<div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Patient Details
    </h5>
    
<dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
    <div class="flex flex-col pb-2">
        <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Cin</dt>
        <dd class="text-md font-semibold">{{ $user->cin }}</dd>
    </div>
    <div class="flex flex-col pb-2">
        <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">First Name</dt>
        <dd class="text-md font-semibold">{{ $user->nom }}</dd>
    </div>
    <div class="flex flex-col pb-2">
        <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Last Name</dt>
        <dd class="text-md font-semibold">{{ $user->prenom }}</dd>
    </div>
    <div class="flex flex-col pb-2">
        <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Email address</dt>
        <dd class="text-md font-semibold">{{ $user->email }}</dd>
    </div>
    <div class="flex flex-col py-2">
        <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Home address</dt>
        <dd class="text-md font-semibold">{{ $user->adresse }}</dd>
    </div>
    <div class="flex flex-col pt-2">
        <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Phone number</dt>
        <dd class="text-md font-semibold">{{ $user->tel }}</dd>
    </div>
</dl>

    
</div>

<div href="#" class="block max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">rendez-vous
    </h5>
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Objet
                </th>


                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultations as $consultation )
                
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$consultation->Date}}
                </th>
                <td class="px-6 py-4">
                    {{$consultation->Objet}}
                </td>
                
                @if(auth()->user()->profile_type !== "infirmiere")

                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                @endif
            </tr>
            @endforeach

        </tbody>
    </table>
</div>



    
</div>

<div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex justify-between">Operations   
        @if(auth()->user()->profile_type !== "infirmiere")

        <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a.75.75 0 01.75.75V9H18a.75.75 0 010 1.5H10v6.25a.75.75 0 01-1.5 0V10H1.75a.75.75 0 010-1.5H9V2.75A.75.75 0 0110 2z" clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Icon description</span>
          </button>
          @endif
    </h5>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>

    
    
                    <th scope="col" class="px-6 py-3">
                        Objet
                    </th>
                </tr>
            </thead>
            <tbody>
                    
                @foreach ($operations as $operation)
                    
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$operation->Date}}
                    </th>

                    
                    
                    <td class="px-6 py-4">
                        {{$operation->Objet}}

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    
</div>

</div>            
</div>
</x-slot>
    

    
    

    
</div>
</x-app-layout>