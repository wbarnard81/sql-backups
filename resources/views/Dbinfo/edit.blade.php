<x-app-layout>
  <x-slot name="header">
    <h2 class value="{{ old('title') }}"="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Edit DB Info') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-4">
          <a href="/dbinfo" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</a>
        </div>
        <div class="p-4">
          <form class="w-full max-w-lg" method="POST" action="{{ route('dbinfo.update',$dbinfo->id) }}">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" id="db_name" for="db_name">DB Name</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" name="db_name" value="{{ $dbinfo->db_name }}" id="db_name" type="text" placeholder="project-dev">
                @error('db_name')
                  <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" id="db_host" for="db_host">DB Host</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="db_host" value="{{ $dbinfo->db_host }}" id="db_host" type="text" placeholder="xxx.xxx.xxx.xxx">
                @error('db_host')
                  <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" id="db_port" for="db_port">DB Port</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="db_port" value="{{ $dbinfo->db_port }}" id="db_port" type="text" placeholder="3306">
                @error('db_port')
                  <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" id="db_cluster"for="db_cluster">Cluster</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  name="db_cluster" value="{{ $dbinfo->db_cluster }}" id="db_cluster">
                    <option value="Dev" @selected($dbinfo->db_cluster == 'Dev')>Dev</option>
                    <option value="Stage" @selected($dbinfo->db_cluster == 'Stage')>Stage</option>
                    <option value="Production" @selected($dbinfo->db_cluster == 'Production')>Production</option>
                  </select>
                  @error('db_cluster')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                </div>
              </div>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
          </form>
          <div>
            @if (session('status'))
                <p class="text-green-500 text-xs italic">
                    {{ session('message') }}
                </p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>