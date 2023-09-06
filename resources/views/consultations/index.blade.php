<x-app-layout>

    <div class="container">
        <x-slot name="header">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex justify-between">Consultations</h5>   


        <!-- Filter Form -->
            <form action="{{ route('consultations.index') }}" method="GET" class=" w-full p-4 bg-white rounded flex  gap-2">
                @csrf
                <div class="w-3/4">
                    <label for="date" class="block text-sm font-medium text-gray-700">Date:</label>
                    <input type="date" name="date" id="date" class="w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" value="{{ request('date') }}">
                </div>
                <div class="w-3/4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200" value="{{ request('end_date') }}">
                </div>
                <div class="w-3/4">
                    <label for="patient_id" class="block text-sm font-medium text-gray-700">Patient:</label>
                    <select name="patient_id" id="patient_id" class="w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="">Select Patient</option>
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->id }}" {{ request('patient_id') == $patient->id ? 'selected' : '' }}>
                                {{ $patient->nom }} {{ $patient->prenom }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-3/4">
                    <label for="doctor_id" class="block text-sm font-medium text-gray-700">Doctor:</label>
                    <select name="doctor_id" id="doctor_id" class="w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="">Select Doctor</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}" {{ request('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                {{ $doctor->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/4">
                    <button type="submit" class="right-0 p-2.5 text-sm font-medium  text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-6">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>                </div>
            </form>
        
        

        <!-- Consultation Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Date</th>
                    <th scope="col" class="px-6 py-3">Objet</th>
                    <th scope="col" class="px-6 py-3">Observation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consultations as $consultation)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 w-full">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $consultation->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $consultation->Date }}</td>
                    <td class="px-6 py-4 ">{{ $consultation->Objet }}</td>
                    <td class="px-6 py-4 ">{{ $consultation->Observation }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>

    </x-slot>
    

    
    

    
</div>
</x-app-layout>
