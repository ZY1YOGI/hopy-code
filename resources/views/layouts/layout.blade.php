<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- Author --}}
  <meta name="author" content="{{ env('AUTHOR_NAME') }}" />
  {{-- Description --}}
  <meta name="description" content="{{ $description }}" />
  {{-- Keywords --}}
  <meta name="keywords" content="{{ $keywords }}" />
  {{-- Title --}}
  <title>{{ $title }}</title>
  {{-- Icon --}}
  <link rel="shortcut icon" href={{ Vite::asset('resources/image/logo.png') }} type="image/x-icon" />
  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
  {{-- AOS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  {{-- SwiperJS --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.css" /> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js" defer></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  {{-- Scripts And STYLS --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-body-light dark:bg-body-dark">
  <!-- loader  -->
  <div class="splash" id="splash">
    <div class="splash"><img src="{{ Vite::asset('resources/image/loading.gif') }}" alt="#" /></div>
  </div>
  <!-- end loader -->
  @include('layouts.header')
  {{ $slot }}
  @include('layouts.footer')
</body>
</html>

{{-- transition-all duration-75 --}}
