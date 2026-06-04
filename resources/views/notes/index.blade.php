@extends('layouts.app')

@section('content')
<div class="space-y-4">
    <h2 class="text-3xl font-bold dark:text-white">
        Notes
    </h2>

    <p class="text-slate-500 mt-2 dark:text-slate-400">
        Buat Catatanmu jadi lebih berwarna
    </p>

    <x-card>
        <h3 class="text-lg font-bold mb-6 dark:text-white">Tambahkan Catatan</h3>

        <div class="space-y-4">
            <div>
                <label class="block mb-2 dark:text-white">Judul</label>
                <input type="text" name="title" class="w-full border rounded-lg px-4 py-2 dark:bg-slate-700 dark:text-white dark:border-slate-600">
            </div>

            <div>
                <label class="block mb-2 dark:text-white">Isi Catatan</label>
                <textarea rows="6" type="text" name="title" class="w-full border rounded-lg px-4 py-2 dark:bg-slate-700 dark:text-white dark:border-slate-600"></textarea>
            </div>
        </div>

        <x-button>Simpan</x-button>
    </x-card>

    <x-card>
        <h3 class="lg font-semibold dark:text-white">Upload Catatan</h3>
        <input type="file" class="block w-full border rounded-lg px-4 py-2 dark:bg-slate-700 dark:text-white dark:border-slate-600">
        <p class="text-slate-500 mt-4 dark:text-slate-400">Upload Catatan Yang ingin anda simpulkan</p>
    </x-card>

    <div>
        <h3 class="text-xl font-bold mb-4 dark:text-white">Catatan Saya</h3>

        <div class="space-y-4">
            <x-card>
                <h4 class='dark:text-white'>Belajar Laravel</h4>
                <p class="text-shadow-yellow-50 mt-2 dark:text-slate-400">Saya sedang belajar laravel</p>
                <div class="flex gap-2 mt-4">
                    <x-button>
                        Simpulkan Menggunakan AI
                    </x-button>
                    <x-button class="bg-emerald-600">
                        Buat Quiz dengan AI
                    </x-button>
                    <x-button class="bg-red-600">
                        Hapus
                    </x-button>
                </div>
            </x-card>

            <x-card>
                <h4 class='dark:text-white'>Belajar Node JS</h4>
                <p class="text-shadow-yellow-50 mt-2 dark:text-slate-400">Saya sedang belajar Node JS dengan framework Next JS</p>
                <div class="flex gap-2 mt-4">
                    <x-button>
                        Simpulkan Menggunakan AI
                    </x-button>
                    <x-button class="bg-emerald-600">
                        Buat Quiz dengan AI
                    </x-button>
                    <x-button class="bg-red-600">
                        Hapus
                    </x-button>
                </div>
            </x-card>
        </div>
    </div>
</div>
@endsection