<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>UPRAA</title>

         <!--   CDN
            link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="{{asset('node_modules/tether/dist/js/tether.min.js')}}"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script
        -->
        
        <!-- Bootstrap Core CSS-->
        <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"-->

        <link  rel="stylesheet" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
         <!-- jQuery-->
        <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
        <!-- Tether-->
        <script src="{{asset('node_modules/tether/dist/js/tether.min.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript-->
        <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.js')}}"></script> 

        <!--Style-->
        <link  rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        
    </head>
        <body>
                <script>
                    $(document).ready(function(){
                        alert("hi");
                    });
                </script>
            @include('layouts.partials.header')
                <div class="container">
                    @yield('content')
                </div>
            @include('layouts.partials.footer')

            @yield('logic')<!--scripts-->
        </body>
</html>