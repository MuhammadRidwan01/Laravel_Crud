<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin List Jurusan') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- @foreach ($jurusans as $jurusan)
                <div class="px-6 py-4 sm:px-6 border-b border-gray-200 hover:bg-gray-50 transition duration-150 ease-in-out">
                    
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $jurusan->detail_jurusan }}</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $jurusan->detail_jurusan }}</p>
    </a>
    
                </div>
                @endforeach --}}

                

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            List Jurusan
            <a href="{{ route("admin.jurusan.create") }}" class="inline-block rounded-md bg-blue-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Tambah Data</a>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Jurusan
                </th>
                <th scope="col" class="px-6 py-3">
                    Detail Jurusan
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusans as $jurusan)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $jurusan->jurusan }}
                </th>
                <td class="px-6 py-4">
                    {{ $jurusan->detail_jurusan }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $jurusans->links() }}

            </div>
        </div>
    </div>

</x-app-layout>