<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Detail Siswa</h1>

    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="bg-gray-200 px-6 py-4">
            <h2 class="text-xl font-semibold">{{ $siswadata->nama_lengkap }}</h2>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p><strong>nama lengkap:</strong> {{ $siswadata->nama_lengkap }}</p>
                    <p><strong>Alamat lahir:</strong> {{ $siswadata->alamat_lahir }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $siswadata->tanggal_lahir }}</p>
                    <p><strong>Alamat:</strong> {{ $siswadata->alamat }}</p>
                    <p><strong>Asal sekolah:</strong> {{ $siswadata->asal_sekolah }}</p>
                    <p><strong>Email:</strong> {{ $siswadata->email }}</p>
                </div>
                <div>
                    <p><strong>Foto:</strong></p>
                    <img src="{{ asset('storage/'.$siswadata->foto) }}" alt="Foto Siswa" class="rounded-lg shadow-md w-48 h-48 object-cover">
                    
                    <p class="mt-4"><strong>Scan Dokumen:</strong></p>
                    <img src="{{ asset('storage/'.$siswadata->scan_kk) }}" alt="Scan Dokumen" class="rounded-lg shadow-md w-48 h-48 object-cover">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <p class="text-sm text-gray-600">Created At: {{ $siswadata->created_at }}</p>
        <p class="text-sm text-gray-600">Updated At: {{ $siswadata->updated_at }}</p>
    </div>

    <a href="{{ route('admin.siswa.index') }}" class="mt-4 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-600">
        Back to List
    </a>
</div>

            </div>
        </div>
    </div>
</x-app-layout>