@extends('layouts.app')

@section('content')
    <section id="history-detail" class="p-8 bg-white rounded-lg shadow dark:bg-gray-800" data-aos="fade-up" data-aos-delay="300">
        <div class="mb-8 text-center">
            <h2 class="text-4xl font-extrabold text-gray-800 dark:text-white">✨ Detail Pembelian</h2>
            <p class="mt-3 text-gray-500 dark:text-gray-300">Lihat informasi lengkap tentang transaksi pembelian Anda.</p>
        </div>

        <!-- Detail Card -->
        <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-900">
            <div class="flex items-center space-x-4">
                <div class="p-4 bg-blue-100 rounded-full dark:bg-blue-800">
                    <svg class="w-12 h-12 text-blue-500 dark:text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M4 8h16M4 12h16m-7 4h7"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-blue-800 dark:text-blue-100">Tari Rejang</h3>
                    <p class="text-gray-600 dark:text-gray-300">Tanggal Pembelian: 12 Oktober 2023</p>
                    <p class="text-gray-600 dark:text-gray-300">Harga: <span class="font-bold">Rp 500.000</span></p>
                </div>
            </div>

            <div class="mt-6">
                <h4 class="text-lg font-semibold text-gray-800 dark:text-white">Deskripsi</h4>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Tari Rejang adalah tarian tradisional Bali yang memiliki makna mendalam sebagai simbol penyambutan atau doa. Tarian ini sering digunakan dalam upacara keagamaan dan perayaan adat Bali.</p>
            </div>

            <div class="mt-6">
                <h4 class="text-lg font-semibold text-gray-800 dark:text-white">Detail Pembayaran</h4>
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-300">Metode Pembayaran</span>
                        <span class="font-semibold text-gray-800 dark:text-gray-200">Transfer Bank</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-300">Status Pembayaran</span>
                        <span class="font-semibold text-green-500 dark:text-green-400">Berhasil</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-300">Nomor Transaksi</span>
                        <span class="font-semibold text-gray-800 dark:text-gray-200">1234567890</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 dark:text-gray-300">Jumlah Pembayaran</span>
                        <span class="font-semibold text-gray-800 dark:text-gray-200">Rp 500.000</span>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <h4 class="text-lg font-semibold text-gray-800 dark:text-white">Lokasi Acara</h4>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Acara Tari Rejang ini akan dilaksanakan di Pura Besakih, Karangasem, Bali, pada tanggal 20 Oktober 2023.</p>
            </div>

            <div class="mt-6 text-center">
                <a href="{{ route('history') }}" class="font-semibold text-blue-500 hover:text-blue-700 dark:text-blue-300 dark:hover:text-blue-100">Kembali ke Riwayat Pembelian</a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        // JavaScript untuk filter kategori
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');
                document.querySelectorAll('.product-card').forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection