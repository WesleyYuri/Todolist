<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Todolist</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        
        @livewireStyles
    </head>
    <body class="bg-gray-100">
        <livewire:todolist />
        @livewireScripts
    </body>
</html>