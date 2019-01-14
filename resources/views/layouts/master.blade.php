<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

    <link rel="stylesheet" href="css/app.css">

    <style>
    </style>
</head>

<body>
    <div id="app">
    @include('layouts.header')

        <router-view></router-view>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>