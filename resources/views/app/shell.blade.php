<!DOCTYPE html>
<html lang="{{ config( 'app.locale' ) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap -->
<link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
@yield( 'css' )
<head>
    <title>{{ config( 'app.name' ) }}</title>
</head>
<body class="container-fluid">
    <div class="row">
        <div id="profile_sidebar" class="col-md-2">
            @include( 'app.sidebars.basic' )
        </div>

        <div id="main_content" class="col-md-8">
            @yield( 'content' )
            @include( 'app.include' )
        </div>

        <div class="col-md-2">
            @auth
                @include( 'app.sidebars.info-bar' )
            @endauth
        </div>
        @yield( 'footer' )
    </div>

</body>
</html>
