@php
    function convertJenisKoleksi($data)
    {
        switch ($data) {
            case 1:
                return 'Buku';
                break;
            case 2:
                return 'Majalah';
                break;
            case 3:
                return 'Cakram Digital';
                break;
            default:
                return 'Tidak ada Koleksi';
                break;
        }
    }
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET" action="">
                        @csrf

                        <!-- Nama Koleksi -->
                        <div>
                            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />

                            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi"
                                :value="old('namaKoleksi', $collection->namaKoleksi)" required disabled />

                            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
                        </div>

                        <!-- Jenis Koleksi -->
                        <div class="mt-4">
                            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />

                            <x-text-input id="jenisKoleksi" class="block mt-1 w-full" type="text" name="jenisKoleksi"
                                :value="old('jenisKoleksi', convertJenisKoleksi($collection->jenisKoleksi))" required disabled />
                        </div>

                        <!-- Jumlah Koleksi -->
                        <div class="mt-4">
                            <x-input-label for="jumlahKoleksi" :value="__('JumlahKoleksi')" />

                            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number"
                                name="jumlahKoleksi" :value="old('jumlahKoleksi', $collection->jumlahKoleksi)" required disabled />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>


                        {{-- <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Tambah Koleksi') }}
                            </x-primary-button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
