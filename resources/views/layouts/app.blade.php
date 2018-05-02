
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
<div id="app">
    @include('layouts.Navbar')
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
<!-- 尾部 -->
<div class="jumbotron" style="margin:0;">
    <div class="container">
        <span>  @2018  ningbo</span>
    </div>
</div>
</html>
