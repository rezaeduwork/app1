<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
        @vite('resources/css/app.css')
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="min-h-[100vh] flex items-center justify-center w-full" style="background: url('{{url('/images/bg.jpg')}}'); background-position: center;">
        {{ $slot }}
        @livewireScripts
        <script>
          document.addEventListener('livewire:init', () => {
              Livewire.on('reload-page', (event) => {
                document.location.reload()
              });
              Livewire.on('alert-success', (event) => {
                Swal.fire({
                  title: "Sukses!",
                  text: event.message,
                  icon: "success"
                });
              });
              Livewire.on('alert-error', (event) => {
                Swal.fire({
                  title: "Gagal!",
                  text: event.message,
                  icon: "error"
                });
              });
          });
        </script>
    </body>
</html>
