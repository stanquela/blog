@extends('layout')
@section('title', 'CREATE BLOG')
@section('content')
<body>
<div class="header">
  <h2>CREATE BLOG</h2>
</div>
<center>
        @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}<p>
        @endif  
</center>
<form action="{{ route('addBlog') }}" method="post">
    @csrf
    <div class="container">         
        <div>
            <input type="text" name="title" placeholder="Add blog title" class="form-control">
        </div><br>
        <div>    
            <textarea name="text" cols="30" rows="10" class="form-control"></textarea>
        </div><br>
        <div>    
            <button type="submit" class="btn btn-success">SUBMIT</button>
        </div>
    </div>
</form>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
@endsection


