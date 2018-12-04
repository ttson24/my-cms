<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
    @yield('title')
</head>
<body class="fixedMenu_header">

    @include('layouts.admin.header')

<div id="wrap">
    <div class="wrapper">
        <div id="left" class="fixed">
            @include('layouts.admin.sidebar')
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container">
            @yield('content')
        </div>
    </div>
    <!--wrapper-->
    <div id="right">
        @include('layouts.admin.right')
    </div>
    <!-- # right side -->
    <div class="admin_content_footer">
        @include('layouts.admin.footer')
    </div>
</div>
    @yield('script')
</body>
</html>
