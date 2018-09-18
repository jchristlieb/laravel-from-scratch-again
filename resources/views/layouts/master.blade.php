<!doctype html>
<html lang="{{ app()->getLocale() }}">

@extends('snippets.head')

<body>

@extends('snippets.nav')


<main role="main" class="container">

    @yield('main')

</main>

@extends('snippets.footer')

</body>
</html>
