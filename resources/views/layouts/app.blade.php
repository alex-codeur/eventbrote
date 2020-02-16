<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <title>Eventbrote</title>
</head>
<body>
    @include('layouts.partials._nav')

    <div class="container">

        @if(session()->has('notification.message'))
            <div class="alert alert-{{ session('notification.type') }}">
                {{ session()->get('notification.message') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>