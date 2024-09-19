<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info jurusan') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($jurusans as $jurusan)
                <div class="px-6 py-4 sm:px-6 border-b border-gray-200 hover:bg-gray-50 transition duration-150 ease-in-out">
                    
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $jurusan->detail_jurusan }}</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $jurusan->detail_jurusan }}</p>
    </a>
    
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>