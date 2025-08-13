<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambah
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- input form --}}
                       <div class="mt-2">
                            <x-input-label for="name" :value="__('Nama Produk')" />
                            <x-text-input id="name" class="block mt-1 w-full p-2" type="text" name="name" :value="old('name')" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="description" :value="__('deskripsi')" />
                            <x-text-input id="description" class="block mt-1 w-full p-2" type="text" name="description" :value="old('description')" required />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="stock" :value="__('Jumlah Stok')" />
                            <x-text-input id="stock" class="block mt-1 w-full p-2" type="text" name="stock" :value="old('stock')" required />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="price" :value="__('Harga Produk')" />
                            <x-text-input id="price" class="block mt-1 w-full p-2" type="text" name="price" :value="old('price')" required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="image" :value="__('image')" />
                            <input id="image" class="block mt-1 w-full p-2" type="file" name="image" :value="old('image')" accept="image/*" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <x-primary-button class="mt-2">
                            {{ __('Simpan') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
