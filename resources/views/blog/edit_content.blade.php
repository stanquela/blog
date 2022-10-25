@extends('layouts/app')
@section('title', 'EDIT BLOG')
@section('content')
<body>
<div class="header">
  <h2>EDIT BLOG</h2>
</div>
<center>
        @if(Session::has('edit_message'))
            <p class="alert alert-info">{{ Session::get('edit_message') }}<p>
        @endif  
</center>
<form action="{{ route('editBlogSave', $data->id) }}" method="post">
    @csrf
    <div class="container">         
        <div>
            <input type="text" name="title" value="{{ $data->title }}" class="form-control">
        </div><br>
        <div>    
            <textarea name="text" cols="30" rows="10" class="form-control">{{ $data->text }}</textarea>
        </div><br>
        <div>    
            <button type="submit" class="btn btn-success">SAVE CHANGES</button>
        </div>
    </div>
</form>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
@endsection


