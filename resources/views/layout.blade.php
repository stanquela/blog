<!-- This layout was made before introducing the AUTH mechanism, it isn't really needed anymore, it is left here only for testing purpouse -->



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="{{ asset('css/test.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
          
    <body class="antialiased">
        
        <nav class ="navbar">
            <a href = "{{ route('index') }}"> Home </a>
            <a href = "{{ route('blog') }}"> Blog </a>
            <a href = "{{ route('createBlog') }}"> Create Blog </a> <!-- This has to be visible only to BLOG WRITER/ADMIN-->
            <a href = ""> About </a>
            <a href = ""> Contact </a>
        </nav>

        @yield('content')

    </body>

</html>

