<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto p-6">
                        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard</h1>
                        
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <!-- Statistic Card 1 -->
                            <div class="bg-yellow-200 p-4 rounded-lg shadow-lg">
                                <div class="p-4">
                                    <div class="text-xl font-semibold text-yellow-900">Patients</div>
                                    <div class="text-md font-medium text-yellow-700 mt-2">{{$patients}}</div>
                                </div>
                            </div>
                
                            <!-- Statistic Card 2 -->
                            <div class="bg-blue-200 p-4 rounded-lg shadow-lg">
                                <div class="p-4">
                                    <div class="text-xl font-semibold text-blue-900">Doctors</div>
                                    <div class="text-md font-medium text-blue-700 mt-2">{{$medecins}}</div>
                                </div>
                            </div>
                
                            <!-- Statistic Card 3 -->
                            <div class="bg-green-200 p-4 rounded-lg shadow-lg">
                                <div class="p-4">
                                    <div class="text-xl font-semibold text-green-900">Infermier</div>
                                    <div class="text-md font-medium text-green-700 mt-2">{{$infermier}}</div>
                                </div>
                            </div>
                
                            <!-- Statistic Card 4 -->
                            <div class="bg-purple-200 p-4 rounded-lg shadow-lg">
                                <div class="p-4">
                                    <div class="text-xl font-semibold text-purple-900">Consultations</div>
                                    <div class="text-md font-medium text-purple-700 mt-2">{{$consultations}}</div>
                                </div>
                            </div>
                            <div class="bg-red-200 p-4 rounded-lg shadow-lg">
                                <div class="p-4">
                                    <div class="text-xl font-semibold text-red-900">Operations</div>
                                    <div class="text-md font-medium text-red-700 mt-2">{{$operations}}</div>
                                </div>
                            </div>
                        </div>
                    </div>                </div>
            </div>
        </div>
    </div>
</x-app-layout>
