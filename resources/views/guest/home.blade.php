<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">        
        <link rel="stylesheet" href=" {{ ('css/app.css') }} ">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                {{-- Pagina in construzione --}}
                @section('app')
                    <div id="app">

                    </div>
                @endsection
                
            </div>
        </div>
        {{-- Richiamare il javascript con dentro vue --}}
        <script src=" {{ ( 'js/front.js' ) }} "></script>
        {{-- Javscript compilato da webpack di bootstrap --}}
        <script src=" {{ ( 'js/app.js' ) }} "></script>
    </body> 
</html>