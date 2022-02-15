<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Todolist</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        @livewireStyles
    </head>
    <body class="bg-gray-100">
        <livewire:todolist />
        @livewireScripts
    </body>
</html>