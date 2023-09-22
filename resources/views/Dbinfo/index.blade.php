<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('DB Info') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-4">
          <a href="/dbinfo/add" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</a>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">DB Name</th>
                  <th scope="col" class="px-6 py-3">DB Username</th>
                  <th scope="col" class="px-6 py-3">DB Password</th>
                  <th scope="col" class="px-6 py-3">DB IP Address</th>
                  <th scope="col" class="px-6 py-3">DB Port</th>
                  <th scope="col" class="px-6 py-3">DB Cluster</th>
                  <th scope="col" class="px-6 py-3">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dbs as $db)
                  <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $db->db_name }}</td>
                    <td class="px-6 py-4">{{ $db->db_host }}</td>
                    <td class="px-6 py-4">{{ $db->db_username }}</td>
                    <td class="px-6 py-4">{{ $db->db_password }}</td>
                    <td class="px-6 py-4">{{ $db->db_port }}</td>
                    <td class="px-6 py-4">{{ $db->db_cluster }}</td>
                    <td class="px-6 py-4">
                      <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</button>
                      <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>