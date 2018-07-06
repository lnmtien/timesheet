<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />    
        <title>{{ config('app.name') }}</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <link href="{{ url('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />		
        <link href="{{ url('assets/demo/demo6/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">
        @include('layouts.header')
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            @include('layouts.aside')
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <script src="{{ url('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
                <script src="{{ url('assets/demo/demo6/base/scripts.bundle.js') }}" type="text/javascript"></script>
                @yield('content')
            </div>
        </div>
    </body>
</html>