<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method('PUT')

                        {{-- input form --}}
                       <div class="mt-2">
                            <x-input-label for="name" :value="__('Nama Produk')" />
                            <x-text-input id="name" class="block mt-1 w-full p-2" type="text" name="name" :value="old('name', $product->name)" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="stock" :value="__('Jumlah Stok')" />
                            <x-text-input id="stock" class="block mt-1 w-full p-2" type="text" name="stock" :value="old('stock', $product->stock)" required />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="price" :value="__('Harga Produk')" />
                            <x-text-input id="price" class="block mt-1 w-full p-2" type="text" name="price" :value="old('price', $product->price)" required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="barcode" :value="__('Barcode')" />
                            <x-text-input id="barcode" class="block mt-1 w-full p-2" type="text" name="barcode" :value="old('barcode', $product->barcode)" required />
                            <x-input-error :messages="$errors->get('barcode')" class="mt-2" />
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
