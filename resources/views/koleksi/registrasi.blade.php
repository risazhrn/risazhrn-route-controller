<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('koleksiStore') }}">
                        @csrf

                        <!-- Nama Koleksi -->
                        <div>
                            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />

                            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi"
                                :value="old('namaKoleksi')" required autofocus />

                            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
                        </div>

                        <!-- Jenis Koleksi -->
                        <div class="mt-4">
                            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />

                            <select name="jenisKoleksi" id="jenisKoleksi" class="block block mt-1 w-full">
                                <option selected>--- Select ---</option>
                                <option value="1">Buku</option>
                                <option value="2">Majalah</option>
                                <option value="3">Cakram Digital</option>
                            </select>
                        </div>

                        <!-- Jumlah Koleksi -->
                        <div class="mt-4">
                            <x-input-label for="jumlahKoleksi" :value="__('JumlahKoleksi')" />

                            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number"
                                name="jumlahKoleksi" :value="old('jumlahKoleksi')" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Tambah Koleksi') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
