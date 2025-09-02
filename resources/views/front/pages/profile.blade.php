@extends('layouts.template')
@section('title', 'Profil - PT Shibaazaki')
@section('meta_keywords', 'PT Shibaazaki, Profil, Rental UPS, Sewa UPS, Maintenance UPS')
@section('meta_description',
    'Kami merupakan penyedia jasa Rental UPS, Sewa UPS, dan juga melayani Maintenance UPS. Kami berlokasi
    di Jakarta tepatnya di Jl. Mawar No 42 RT006/Rw08 Srengseng, Kec. Kembangan, Kota Jakarta Barat
    11630. Kami telah berpengalaman dalam menangani Service, Installasi & Maintenance berbagai merk UPS
    seperti : APC, Chloride, Bauma, Delta Power, ICA, Laplace, Emerson, Liebert, MGE, Sendon, Toshiba,
    Powerware, Pascal, Unipower, Vektor dll. UPS Subrata dapat melayani jasa Rental UPS maupun service
    UPS mencakup daerah JABODETABEK hingga seluruh Indonesia.')
@section('content')
    <x-hero-header title="Profile Kami"
        subtitle="Kami adalah penyedia jasa Rental UPS, Sewa UPS, dan juga melayani Maintenance UPS." />
    <x-breadcrumb :items="[['label' => 'Beranda', 'url' => route('front.home.index')], ['label' => 'Profil']]" />
    <section class="container max-w-7xl mx-auto mb-16 flex flex-col gap-8 px-5 mt-5 lg:mt-10">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <!-- Text Content -->
            <div class="space-y-5">
                <h2 class="font-semibold text-2xl sm:text-3xl lg:text-4xl mb-3 lg:mb-5 leading-snug">
                    UPS Shibaazaki
                </h2>
                <div class="prose prose-sm sm:prose-base lg:prose-lg text-belibang-grey leading-relaxed max-w-none">
                    <x-paragraph>
                        PT. Shibaazaki didirikan dengan Akte notaris tanggal 02 Pebruari 2005,
                        merupakan perubahan pemilik saham PT. Pioranusa Pratamamaju, maka perusahaan
                        tersebut diatas berganti nama menjadi PT.Shibaazaki adapun tingkat managemen dan
                        Personal kerja merupakan personal dari PT. Pioranusa Pratamamaju. Perusahaan ini
                        bergerak dalam bidang jasa teknologi informasi, peralatan/suku cadang kantor dan
                        pergudangan, mekanikal dan elektrikal/listrik, teknologi informasi, dan peralatan/suku
                        cadang radio, telekomunikasi dan elektronika, untuk melayani kebutuhan yang semakin
                        berkembang dalam perekonomian Indonesia yang semakin maju.
                    </x-paragraph>
                    <x-paragraph>
                        PT. Shibaazaki merupakan perusahaan swasta yang didirikan oleh tenaga yang
                        berpengalaman dibidangnya, untuk melayani sektor-sektor pengadaan dan perawatan
                        yang berhubungan baik kebutuhan khusus ataupun kepentingan lainnya.
                    </x-paragraph>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-2 md:pt-4">
                    <x-front-button-primary href="https://wa.me/628123456789">
                        <svg aria-label="WhatsApp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24"
                            height="24" fill="currentColor" class="w-4 h-4 font-bold">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <span>Hubungi Kami</span>
                    </x-front-button-primary>
                    <x-front-button-seccondary href="about.html">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"
                            class="w-4 h-4">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                    stroke="#b0b0b0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        Lihat Layanan Kami
                    </x-front-button-seccondary>
                </div>
            </div>

            <!-- Image Content -->
            <div class="relative">
                <div class="p-[1px] rounded-2xl bg-img-purple-to-orange">
                    <div
                        class="bg-img-black-gradient rounded-2xl p-4 sm:p-6 lg:p-8 h-[250px] sm:h-[350px] lg:h-[500px] flex items-center justify-center">
                        <img src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t39.30808-6/475301182_496416920170422_7602111244084816273_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEvOoo5WowSJWshj6geSxwhIFlJ652DcKwgWUnrnYNwrJx3_-5wDtmftJ1WuVLOsN3TIreCoxHqNxRs5OoBTLkc&_nc_ohc=dwkrzTcLTzoQ7kNvwGeh3VS&_nc_oc=AdkES85hIcwqxP1hxqRahrXYui9NQDGecmggHYMYNfMdVX7nrsVp5qPVOrH5hUegc0A&_nc_zt=23&_nc_ht=scontent.fcgk24-2.fna&_nc_gid=XYZkKOtqKu-xtC8nLyvAyg&oh=00_AfVbqgNbuooBhcf1SVoZAFCPf8S2Qn975gRZSeSJHGB5tA&oe=68AA5D90"
                            alt="UPS Shibaazaki" class="w-full h-full object-cover rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl md:text-2xl lg:text-3xl sm:text-4xl mb-5 text-white text-center">Keunggulan UPS
            <br>Shibaazaki👏
        </h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1: Pelayanan Terbaik -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-transparent hover:bg-gradient-to-r hover:from-green-500 hover:to-blue-500 transition-all duration-300">
                <div class="bg-belibang-darker-grey rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-xl font-bold text-blue-400 mb-2">Pelayanan Terbaik</div>
                    <p class="text-gray-400 text-sm">Layanan 24/7 dengan respon cepat dan solusi tepat sasaran</p>
                </div>
            </div>

            <!-- Card 2: Hasil Memuaskan -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-transparent hover:bg-gradient-to-r hover:from-green-500 hover:to-blue-500 transition-all duration-300">
                <div class="bg-belibang-darker-grey rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-xl font-bold text-green-400 mb-2">Hasil Memuaskan</div>
                    <p class="text-gray-400 text-sm">Kualitas kerja terjamin dengan tingkat kepuasan pelanggan tinggi
                    </p>
                </div>
            </div>

            <!-- Card 3: Tim Profesional -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-transparent hover:bg-gradient-to-r hover:from-green-500 hover:to-blue-500 transition-all duration-300">
                <div class="bg-belibang-darker-grey rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-xl font-bold text-purple-400 mb-2">Tim Profesional</div>
                    <p class="text-gray-400 text-sm">Teknisi berpengalaman dan bersertifikat internasional</p>
                </div>
            </div>

            <!-- Card 4: Garansi Panjang -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-transparent hover:bg-gradient-to-r hover:from-green-500 hover:to-blue-500 transition-all duration-300">
                <div class="bg-belibang-darker-grey rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-orange-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-xl font-bold text-orange-400 mb-2">Garansi Panjang</div>
                    <p class="text-gray-400 text-sm">Garansi hingga 2 tahun dengan after-sales service terpercaya</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container max-w-[1230px] mx-auto mb-[102px] px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="font-semibold text-xl md:text-3xl lg:text-4xl mb-5 text-white">
                Klien Kami 🤝
            </h2>
            <p class="text-gray-300 text-sm md:text-base lg:text-lg max-w-2xl mx-auto mb-8">
                Dipercaya oleh berbagai perusahaan terkemuka untuk kebutuhan UPS dan backup power mereka
            </p>
            <div class="flex items-center justify-center gap-8 text-sm text-gray-400">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                    <span>500+ Klien Aktif</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                    <span>10+ Tahun Pengalaman</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                    <span>100% Kepuasan</span>
                </div>
            </div>
        </div>
    </section>
    <section id="Tool" class="mb-[102px] flex flex-col gap-8">
        <div class="tools-logos w-full overflow-hidden flex flex-col gap-5">
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">PT Indofood Tbk</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Produsen makanan terbesar
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">PT Indofood Tbk</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Produsen makanan terbesar
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">PT Indofood Tbk</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Produsen makanan terbesar
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">PT Indofood Tbk</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Produsen makanan terbesar
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Cards -->
    <section class="container max-w-[1230px] mx-auto mb-[102px] px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Card 1: Perbankan -->
            <div
                class="client-card bg-belibang-darker-grey rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Sektor Perbankan</h3>
                <p class="text-gray-300 text-sm mb-4">Melayani berbagai bank terkemuka dengan sistem UPS yang handal untuk
                    menjaga kontinuitas operasional perbankan.</p>
                <div class="text-sm text-gray-400">
                    <span class="font-semibold text-green-400">15+</span> Bank Partner
                </div>
            </div>

            <!-- Card 2: Telekomunikasi -->
            <div
                class="client-card bg-belibang-darker-grey rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Telekomunikasi</h3>
                <p class="text-gray-300 text-sm mb-4">Menjaga jaringan telekomunikasi tetap aktif 24/7 dengan solusi UPS
                    terdepan untuk provider terkemuka.</p>
                <div class="text-sm text-gray-400">
                    <span class="font-semibold text-blue-400">8+</span> Provider Telco
                </div>
            </div>

            <!-- Card 3: BUMN -->
            <div
                class="client-card bg-belibang-darker-grey rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">BUMN</h3>
                <p class="text-gray-300 text-sm mb-4">Mendukung operasional BUMN dengan sistem backup power yang reliable
                    untuk infrastruktur kritis negara.</p>
                <div class="text-sm text-gray-400">
                    <span class="font-semibold text-red-400">12+</span> Perusahaan BUMN
                </div>
            </div>

            <!-- Card 4: Rumah Sakit -->
            <div
                class="client-card bg-belibang-darker-grey rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Rumah Sakit</h3>
                <p class="text-gray-300 text-sm mb-4">Menjamin keamanan pasien dengan sistem UPS medis grade yang tidak
                    boleh gagal dalam situasi darurat.</p>
                <div class="text-sm text-gray-400">
                    <span class="font-semibold text-pink-400">25+</span> Rumah Sakit
                </div>
            </div>

            <!-- Card 5: Data Center -->
            <div
                class="client-card bg-belibang-darker-grey rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Data Center</h3>
                <p class="text-gray-300 text-sm mb-4">Melindungi infrastruktur IT kritikal dengan sistem UPS enterprise
                    untuk uptime maksimal data center.</p>
                <div class="text-sm text-gray-400">
                    <span class="font-semibold text-purple-400">20+</span> Data Center
                </div>
            </div>

            <!-- Card 6: Manufaktur -->
            <div
                class="client-card bg-belibang-darker-grey rounded-2xl p-8 hover:transform hover:scale-105 transition-all duration-300">
                <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Manufaktur</h3>
                <p class="text-gray-300 text-sm mb-4">Mendukung kelancaran produksi dengan sistem UPS industrial yang tahan
                    terhadap kondisi ekstrem.</p>
                <div class="text-sm text-gray-400">
                    <span class="font-semibold text-yellow-400">30+</span> Pabrik
                </div>
            </div>
        </div>
    </section>
@endsection
