<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                        <th scope="col" class="px-6 py-3">DB Name</th>
                        <th scope="col" class="px-6 py-3">DB IP Address</th>
                        <th scope="col" class="px-6 py-3">DB Cluster</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dbs as $db)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $db->db_name }}</td>
                            <td class="px-6 py-4">{{ $db->db_host }}</td>
                            <td class="px-6 py-4">{{ $db->db_cluster }}</td>
                            <td class="px-6 py-4 flex">
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2" href="{{ route('backups', $db->id) }}">Get Backup</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
