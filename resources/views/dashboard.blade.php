<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-card>
                <h3 class="text-lg font-semibold mb-2">Ringkasan Hari Ini</h3>
                <p class="text-gray-600 mb-6">Selamat datang, {{ auth()->user()->name }}.</p>

                <!-- Pengujian Komponen x-badge -->
                <div class="border-t pt-4">
                    <h4 class="text-sm font-semibold text-gray-700 mb-3">Status Stok Produk (Uji Coba Komponen)</h4>
                    <div class="flex items-center gap-3">
                        <x-badge status="Aman" />
                        <x-badge status="Menipis" />
                        <x-badge status="Habis" />
                    </div>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>