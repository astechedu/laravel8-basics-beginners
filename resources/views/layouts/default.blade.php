<!doctype html>
<html>
   <head>
    
    @include('partials.head')

    <title>App Name - @yield('title')</title>

    </head>
    <body>   
    	@include('partials.navbar')
        <div class="container">
            @yield('content')
        </div>

         @include('partials.footer')

    </body>
</html>