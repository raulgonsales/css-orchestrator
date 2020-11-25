<!doctype html>
<html lang="en">
    @include('includes.head')
    <body>
        <div class="wrapper">
            @include('includes.sidebar')

            <div id="content">
                @include('includes.header')

                <section class="main">
                    @yield('content')
                </section>

                @include('includes.footer')
            </div>
        </div>
    </body>
</html>
