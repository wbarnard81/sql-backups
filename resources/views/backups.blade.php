<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
                <div>
                    <p><strong>DB:</strong> {{ $dbs->db_name }} on <strong>Host</strong>: {{ $dbs->db_host }}</p>
                </div>
                <div class="m-4">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Make Backup</a>
                    <a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-2 rounded">Previous Backup</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
