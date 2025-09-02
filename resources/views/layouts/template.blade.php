<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon/favicon.png') }}">
    <title>@yield('title', 'PT Shibaazaki')</title>
    {{-- meta yield per page --}}
    <meta name="title" content="@yield('meta_title', 'PT Shibaazaki')">
    <meta name="description" content="@yield(
        'meta_description',
        'PT Shibaazaki. Your Trusted UPS Solutions Partner. We’re working hard to launch a new and
                                    improved website. Stay tuned to explore PT Shibaazaki’s reliable and innovative solutions for UPS provision, rental, and
                                    maintenance.'
    )">
    <meta name="keywords" content="@yield('meta_keywords', 'Shibaazaki, UPS, Rental, Maintenance, Jual Beli, Solutions, Trusted Partner')">
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
