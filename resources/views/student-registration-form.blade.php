<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Skotga - Pendaftaran siswa baru</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    {{-- Container --}}
    <div class="mx-auto">
      <div class="flex justify-content-center">
        <div class="w-full h-screen">
          <img src="{{ asset('img/img-hero.jpg') }}" alt="logo" class="object-cover h-screen">
        </div>
        <div class="w-full h-full shadow-lg border-spacing-4 px-4 py-4 rounded">
          <p class="text-2xl mb-4 font-bold text-center">Pendaftaran Siswa Baru</p>
          <h1 class="text-xl">Biodata Diri</h1>
          <livewire:student.student />
        </div>
      </div>
    </div>
    {{-- /Container --}}
 
  </body>
</html>