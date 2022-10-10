@extends('layout')

@section('title', "HOME")

@section('content')
    <body class="antialiased">
        <h1 class="red">WELCOME</h1>
        
        <h1>Go to blog  <a href="{{ route('blog') }}"> HERE </a>  </h1>
    </body>
@endsection

