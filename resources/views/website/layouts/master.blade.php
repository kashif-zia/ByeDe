<!doctype html>
<html lang="ja">
@include('website.partials.head')

<body>
    <div class="main-content">
        @include('website.partials.header')
        @yield('content')
    </div>
    @include('website.partials.footer')

    @include('website.partials.script')
</body>

</html>