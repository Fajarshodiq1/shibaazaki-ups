@extends('layouts.template')

@section('title', 'Hubungi Kami - Rental UPS Terpercaya')
@section('meta_title', 'Hubungi Kami - Rental UPS Terpercaya')
@section('meta_description',
    'Hubungi kami untuk konsultasi dan pemesanan rental UPS berkualitas tinggi. Tim ahli kami
    siap membantu kebutuhan daya cadangan Anda.')
@section('meta_keywords', 'contact rental ups, hubungi rental ups, konsultasi ups, pemesanan ups, daya cadangan')
@section('content')
    <x-hero-header title="Hubungi Kami ☎️" subtitle="Isi form di bawah ini dan tim kami akan menghubungi Anda dalam 24 jam" />
    <!-- Contact Form Section -->
    <section class="py-20 bg-belibang-black relative overflow-hidden">
        <div class="container mx-auto px-4 relative">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <!-- Contact Form -->
                    <div class="order-2 lg:order-1">
                        <form
                            class="bg-belibang-darker-grey/50 backdrop-blur-lg rounded-3xl p-8 md:p-12 border border-belibang-dark-grey">
                            <div class="grid md:grid-cols-2 gap-8 mb-8">
                                <!-- Name -->
                                <div class="group">
                                    <label class="block text-belibang-light-grey font-medium mb-3">Nama Lengkap *</label>
                                    <input type="text" name="name" required
                                        class="w-full bg-belibang-black/50 border border-belibang-dark-grey rounded-full px-4 py-4 text-white focus:border-blue-500 focus:outline-none transition-colors placeholder-belibang-grey"
                                        placeholder="Masukkan nama lengkap Anda">
                                </div>

                                <!-- Company -->
                                <div class="group">
                                    <label class="block text-belibang-light-grey font-medium mb-3">Nama Perusahaan</label>
                                    <input type="text" name="company"
                                        class="w-full bg-belibang-black/50 border border-belibang-dark-grey rounded-full px-4 py-4 text-white focus:border-blue-500 focus:outline-none transition-colors placeholder-belibang-grey"
                                        placeholder="Nama perusahaan (opsional)">
                                </div>

                                <!-- Email -->
                                <div class="group">
                                    <label class="block text-belibang-light-grey font-medium mb-3">Email *</label>
                                    <input type="email" name="email" required
                                        class="w-full bg-belibang-black/50 border border-belibang-dark-grey rounded-full px-4 py-4 text-white focus:border-blue-500 focus:outline-none transition-colors placeholder-belibang-grey"
                                        placeholder="email@domain.com">
                                </div>

                                <!-- Phone -->
                                <div class="group">
                                    <label class="block text-belibang-light-grey font-medium mb-3">Nomor Telepon *</label>
                                    <input type="tel" name="phone" required
                                        class="w-full bg-belibang-black/50 border border-belibang-dark-grey rounded-full px-4 py-4 text-white focus:border-blue-500 focus:outline-none transition-colors placeholder-belibang-grey"
                                        placeholder="+62 812-3456-7890">
                                </div>
                            </div>

                            <!-- Service Type -->
                            <div class="mb-8">
                                <label class="block text-belibang-light-grey font-medium mb-3">Jenis Layanan *</label>
                                <select name="service_type" required
                                    class="w-full bg-belibang-black/50 border border-belibang-dark-grey rounded-full px-4 py-4 text-white focus:border-blue-500 focus:outline-none transition-colors">
                                    <option value="">Pilih jenis layanan</option>
                                    <option value="rental_ups">Rental UPS</option>
                                    <option value="maintenance">Maintenance UPS</option>
                                    <option value="consultation">Konsultasi Teknis</option>
                                    <option value="installation">Instalasi UPS</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div class="mb-8">
                                <label class="block text-belibang-light-grey font-medium mb-3">Pesan *</label>
                                <textarea name="message" rows="6" required
                                    class="w-full bg-belibang-black/50 border border-belibang-dark-grey rounded-xl px-4 py-4 text-white focus:border-blue-500 focus:outline-none transition-colors placeholder-belibang-grey resize-none"
                                    placeholder="Jelaskan kebutuhan UPS Anda, termasuk kapasitas daya, durasi rental, dan lokasi penggunaan..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit"
                                    class="group bg-gradient-to-r from-blue-500 to-green-600 hover:from-blue-600 hover:to-green-700 text-white font-bold px-12 py-4 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                                    <span class="flex items-center justify-center">
                                        Kirim Pesan
                                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Map & Office Info -->
                    <div class="order-1 lg:order-2">
                        <div
                            class="bg-belibang-darker-grey/50 backdrop-blur-lg rounded-3xl p-8 border border-belibang-dark-grey h-full">
                            <!-- Office Info -->
                            <div class="mb-8">
                                <h3 class="text-2xl font-bold text-white mb-6">Kunjungi Kantor Kami</h3>

                                <!-- Address -->
                                <div class="flex items-start mb-6">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-semibold mb-2">Alamat Kantor</h4>
                                        <p class="text-belibang-grey leading-relaxed">
                                            Jl. Rawajati Barat II No.42, RT.6/RW.4, Rawajati, Kec. Pancoran, Kota Jakarta
                                            Selatan, Daerah Khusus Ibukota Jakarta 12750
                                        </p>
                                    </div>
                                </div>

                                <!-- Working Hours -->
                                <div class="flex items-start mb-6">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-semibold mb-2">Jam Operasional</h4>
                                        <div class="text-belibang-grey space-y-1">
                                            <p>Senin - Minggu: 08:00 - 17:00</p>
                                            <p class="text-yellow-400">24/7 Emergency Service</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Contact -->
                                <div class="flex items-start">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-semibold mb-2">Kontak Cepat</h4>
                                        <div class="space-y-2">
                                            <a href="tel:+6281234567890"
                                                class="text-blue-400 hover:text-blue-300 transition-colors block">
                                                +62 81318222618
                                            </a>
                                            <a href="tel:+6281234567890"
                                                class="text-blue-400 hover:text-blue-300 transition-colors block">
                                                +62 82123059203
                                            </a>
                                            <a href="mailto:ptshibaazaki@gmail.com"
                                                class="text-blue-400 hover:text-blue-300 transition-colors block">
                                                ptshibaazaki@gmail.com
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Google Maps Embed -->
                            <div class="rounded-2xl overflow-hidden border border-belibang-dark-grey">
                                <div class="aspect-video w-full">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0251008100054!2d106.84964387428316!3d-6.260423861290252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f24da744de91%3A0x4297f8d9f927aca3!2sPT.%20SHIBAAZAKI%20(BELI%20UPS%2C%20SEWA%20UPS%2C%20RENTAL%20UPS%2C%20PREVENTIVE%20MAINTENANCE%20UPS)!5e0!3m2!1sid!2sid!4v1756114883080!5m2!1sid!2sid"
                                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                        class="grayscale hover:grayscale-0 transition-all duration-500">
                                    </iframe>
                                </div>
                                <div class="p-4 bg-belibang-black/50">
                                    <div class="flex items-center justify-between">
                                        <p class="text-belibang-grey text-sm">Klik peta untuk navigasi</p>
                                        <a href="https://goo.gl/maps/example" target="_blank"
                                            class="text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors">
                                            Buka di Google Maps →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gradient-to-b from-belibang-darker-grey to-belibang-black">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-2xl md:text-5xl font-bold text-white mb-4">
                        Pertanyaan Umum
                    </h2>
                    <p class="text-base lg:text-xl text-belibang-grey">
                        Jawaban untuk pertanyaan yang sering diajukan
                    </p>
                </div>

                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div
                        class="group bg-belibang-darker-grey/50 backdrop-blur-lg rounded-xl lg:rounded-full border border-belibang-dark-grey overflow-hidden">
                        <button
                            class="w-full px-8 py-6 text-left hover:bg-belibang-dark-grey/30 transition-colors focus:outline-none"
                            onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-bold text-white">Berapa minimum durasi rental UPS?</h3>
                                <svg class="w-5 h-5 text-belibang-grey transition-transform transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-belibang-grey">Minimum durasi rental UPS adalah 1 hari. Kami menawarkan paket
                                rental harian, mingguan, bulanan, hingga tahunan dengan harga yang kompetitif.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div
                        class="group bg-belibang-darker-grey/50 backdrop-blur-lg rounded-xl lg:rounded-full border border-belibang-dark-grey overflow-hidden">
                        <button
                            class="w-full px-8 py-6 text-left hover:bg-belibang-dark-grey/30 transition-colors focus:outline-none"
                            onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-bold text-white">Apakah termasuk instalasi dan maintenance?</h3>
                                <svg class="w-5 h-5 text-belibang-grey transition-transform transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-belibang-grey">Ya, paket rental kami sudah termasuk instalasi, konfigurasi, dan
                                maintenance rutin. Tim teknisi berpengalaman akan memastikan UPS berfungsi optimal.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div
                        class="group bg-belibang-darker-grey/50 backdrop-blur-lg rounded-xl lg:rounded-full border border-belibang-dark-grey overflow-hidden">
                        <button
                            class="w-full px-8 py-6 text-left hover:bg-belibang-dark-grey/30 transition-colors focus:outline-none"
                            onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-bold text-white">Kapasitas UPS apa saja yang tersedia?</h3>
                                <svg class="w-5 h-5 text-belibang-grey transition-transform transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-belibang-grey">Kami menyediakan UPS dengan berbagai kapasitas mulai dari 1 KVA
                                hingga 500 KVA, cocok untuk kebutuhan rumah tangga hingga industri besar.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div
                        class="group bg-belibang-darker-grey/50 backdrop-blur-lg rounded-xl lg:rounded-full border border-belibang-dark-grey overflow-hidden">
                        <button
                            class="w-full px-8 py-6 text-left hover:bg-belibang-dark-grey/30 transition-colors focus:outline-none"
                            onclick="toggleFAQ(this)">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-bold text-white">Bagaimana jika terjadi kerusakan pada UPS?</h3>
                                <svg class="w-5 h-5 text-belibang-grey transition-transform transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="px-8 pb-6 hidden">
                            <p class="text-belibang-grey">Semua unit UPS rental dilindungi asuransi dan warranty. Tim
                                teknisi kami siap 24/7 untuk penggantian atau perbaikan unit jika terjadi kerusakan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
@endpush
