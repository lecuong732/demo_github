<!doctype html>
<html lang = "vi">
    <head>
        <meta charset = "UTF-8">
        <title>Lập trình
            @section('title')
                Laravel
            @stop
            @yield('title')
        </title>
        <link type="text/css" rel = "stylesheet" href = "{{ asset('public/template/css/mystyle.css') }}">
    </head>
    <body>
        <div id="wrapper">
            @include('views.marquee', ['mar_content' => 'Tôi là cường, tôi đang học laravel'])
            <div id="header">
                @section('sidebar')
                    Đây là menu
                @show
            </div>
            <div id="content">
                @section('noidung')
                    Đây là trang master
                @stop
                @yield('noidung')
                    <img src = "{{ asset('public/template/images/tu_nhien.jpg') }}" alt = "tu nhien">
            </div>
            <div id="footer"></div>

        </div>
    </body>
</html>