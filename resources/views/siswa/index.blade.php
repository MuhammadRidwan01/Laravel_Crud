<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dafatr Pendaftar') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead class="bg-gray-500">
                        <tr>
                            <th class="px-6 py-3 text-xs text-slate-300">
                                No
                            </th>
                            <th class="px-6 py-3 text-xs text-slate-300">
                                Nama
                            </th>
                            <th class="px-6 py-3 text-xs text-slate-300">
                                Asal sekolah
                            </th>
                            <th class="px-6 py-3 text-xs text-slate-300">
                                Waktu Mendaftar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $siswa->nama_lengkap }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $siswa->asal_sekolah }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $siswa->created_at}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $siswas->links() }}
            </div>
        </div>
    </div>
</x-app-layout>