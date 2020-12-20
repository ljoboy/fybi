<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Dark Angel">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/coreui.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('font-awesome/css/fontawesome-all.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    {{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>--}}
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/dropzone.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
    @yield('styles')
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
<div class="c-app flex-row align-items-center">
    <div class="container">
        @yield("content")
    </div>
</div>
@yield('scripts')
</body>

</html>
