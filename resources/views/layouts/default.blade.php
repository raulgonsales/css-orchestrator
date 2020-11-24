<!doctype html>
<html lang="en">
    @include('includes.head')
    <body>
        <div class="wrapper">
            @include('includes.sidebar')

            <div id="content">
                @include('includes.header')

                @yield('content')

                @include('includes.footer')
            </div>
        </div>
    </body>
</html>
