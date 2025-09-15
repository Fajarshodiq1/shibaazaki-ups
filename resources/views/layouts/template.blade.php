<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon/favicon.png') }}">
    <title>@yield('title', 'UPS - PT Shibaazaki')</title>
    {{-- meta yield per page --}}
    <meta name="title" content="@yield(
        'meta_title',
        'PT Shibaazaki - Distributor UPS PASCAL, Penjualan unit UPS, Rental UPS dan Perawatan Service
                                    Maintenance'
    )">
    <meta name="description" content="@yield(
        'meta_description',
        'PT Shibaazaki. Mitra Solusi UPS Tepercaya Anda. Kami sedang berupaya keras untuk meluncurkan situs web yang baru dan
                                            lebih baik. Pantau terus untuk menjelajahi solusi PT Shibaazaki yang andal dan inovatif untuk penyediaan, penyewaan, dan
                                            pemeliharaan UPS.'
    )">
    <meta name="keywords" content="@yield('meta_keywords', 'Shibaazaki, UPS, Rental, Maintenance, Jual UPS, Solutions, Trusted Partner')">
    <meta name="author" content="PT Shibaazaki">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="indonesia">
    <meta name="revisit-after" content="7 days">
    <meta name="theme-color" content="#1F1F1F">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PT Shibaazaki">
    <meta name="msapplication-TileColor" content="#1F1F1F">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/favicon.png') }}">
    <meta name="msapplication-config" content="{{ asset('favicon/browserconfig.xml') }}">
    <meta property="og:title" content="@yield(
        'meta_title',
        'PT Shibaazaki - Distributor UPS PASCAL, Penjualan unit UPS, Rental UPS dan Perawatan Service
                                    Maintenance'
    )" />
    <meta property="og:description" content="@yield(
        'meta_description',
        'PT Shibaazaki. Mitra Solusi UPS Tepercaya Anda. Kami sedang berupaya keras untuk meluncurkan situs web yang baru dan
                                            lebih baik. Pantau terus untuk menjelajahi solusi PT Shibaazaki yang andal dan inovatif untuk penyediaan, penyewaan, dan
                                            pemeliharaan UPS.'
    )" />
    <meta property="og:image" content="@yield('meta_image', asset('favicon/favicon.png'))" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name"
        content="PT Shibaazaki - Distributor UPS PASCAL, Penjualan unit UPS, Rental UPS dan Perawatan Service
    Maintenance" />
    {{-- meta location --}}
    <meta property="place:location:latitude" content="-6.200000" />
    <meta property="place:location:longitude" content="106.816666" />
    {{-- meta business --}}
    <meta property="business:contact_data:street_address"
        content="Jl. Rawajati Barat II No.42, RT.6/RW.4, Rawajati, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12750" />
    <meta property="business:contact_data:locality" content="Jakarta Selatan" />
    <meta property="business:contact_data:postal_code" content="12750" />
    <meta property="business:contact_data:country_name" content="Indonesia" />
    <meta property="business:contact_data:email" content="ptshibaazaki@gmail.com" />
    <meta property="business:contact_data:phone_number" content="+62813-1822-2618" />
    <meta property="business:contact_data:website" content="https://shibaazaki.com" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('meta_title', 'PT Shibaazaki - Distributor UPS PASCAL, Rental & Service UPS')">
    <meta name="twitter:description" content="@yield('meta_description', 'PT Shibaazaki. Mitra Solusi UPS Tepercaya Anda.')">
    <meta name="twitter:image" content="@yield('meta_image', asset('favicon/favicon.png'))">

    {{-- custom styles --}}
    <style>
        .client-logo {
            transition: all 0.3s ease;
            filter: grayscale(100%) brightness(0.7);
        }

        .client-logo:hover {
            filter: grayscale(0%) brightness(1);
            transform: scale(1.05);
        }

        .scrolling-wrapper {
            animation: scroll 30s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .scrolling-wrapper:hover {
            animation-play-state: paused;
        }

        .client-card {
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .scrolling-wrapper:hover {
            animation-play-state: paused;
        }

        /* Responsive logo sizes */
        .client-logo {
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .client-logo:hover {
            transform: scale(1.1);
        }

        .client-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* Mobile optimizations */
        @media (max-width: 640px) {
            .scrolling-wrapper {
                gap: 2rem;
                animation-duration: 25s;
            }

            .client-logo {
                min-width: 60px;
                min-height: 60px;
            }
        }

        @media (min-width: 641px) and (max-width: 768px) {
            .scrolling-wrapper {
                gap: 2.5rem;
                animation-duration: 28s;
            }
        }

        @media (min-width: 769px) {
            .scrolling-wrapper {
                gap: 3rem;
                animation-duration: 30s;
            }
        }
    </style>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">
    {{-- alpine js --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-belibang-black text-white">
    @include('front.partials.front-nav')
    @yield('content')
    @stack('scripts')
    @include('front.partials.footer')

</body>

</html>
