<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')

<body>
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
    <main style='display:none;'>
        @include('layouts.partials.topnav')
        @yield('content')
    </main>

    {{-- @include('layouts.partials.main_Close') --}}

    @include('layouts.partials.script')
</body>

</html>
