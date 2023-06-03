<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AdminKit Dashboard</title>

    <!-- App Css-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />

    @livewireStyles
</head>

<body>

    {{ $slot }}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- custom script -->
    @stack('javascript')

    <!-- livewire scripts -->
    @livewireScripts
</body>

</html>