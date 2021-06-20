<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.login.inc_top')

</head>

<style>

.container{
    background: transparent;
    backdrop-filter: blur(8px);
}
</style>

<body>
    @include('partials.login.header')
    @yield('content')
    @include('partials.inc_bottom')
    @include('partials.login.footer')
</body>
</html>
