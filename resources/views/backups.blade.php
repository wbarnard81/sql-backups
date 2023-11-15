<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Backups') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
        <div>
          <p><strong>DB:</strong> {{ $dbs->db_name }} on <strong>Host</strong>: {{ $dbs->db_host }}</p>
        </div>
        <div class="m-4">
          <form class="w-full max-w-lg" method="POST" action="{{ route('backups.create') }}">
            @csrf
            <input name="db_id" type="hidden" value="{{$dbs->id}}">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" id="db_username" for="db_username">DB Username</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" name="db_username" value="{{ old('db_username') }}" id="db_username" type="text" placeholder="username">
                @error('db_username')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" id="db_password" for="db_password">DB Password</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="db_password" value="{{ old('db_password') }}" id="db_password" type="text" placeholder="xxxxxxxxxxxx">
                @error('db_password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>
            </div>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Make Backup</button>
          </form>
          <a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-2 rounded">Previous Backup</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>