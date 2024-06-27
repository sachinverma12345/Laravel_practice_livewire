<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
@livewireStyles
       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
      <livewire:counter/>
      @livewireScripts
      <script src="{{ asset('/livewire/livewire.js') }}" defer></script>
      <script>
        window.livewire_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        document.addEventListener('livewire:load', function () {
            Livewire.set('csrfToken', window.livewire_token);
        });
    </script>
    </body>
</html>

